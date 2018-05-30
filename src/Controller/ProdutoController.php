<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produto Controller
 *
 * @property \App\Model\Table\ProdutoTable $Produto
 *
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categoria']
        ];
        $produto = $this->paginate($this->Produto);

        $this->set(compact('produto'));
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produto->get($id, [
            'contain' => ['Categoria', 'Pedido']
        ]);

        $this->set('produto', $produto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produto->newEntity();

        if ($this->request->is('post')) {
            $imagem = $this->request->getData('imagem');
            unset($this->request->data['imagem']);
            $produto = $this->Produto->patchEntity($produto, $this->request->getData());
            $usuario_id = $this->Auth->user('id');
            $produto->criado_por = $usuario_id;
            $produto->alterado_por = $usuario_id;
            $produto->caminho_imagem = $this->Produto->getCaminhoImagem($produto->codigo_produto, $imagem);

            if ($produto->caminho_imagem === 'erro_arquivo') {
                $this->Flash->error(__('Por favor, selecione uma imagem válida.'));
            }
            else if ($produto->caminho_imagem === 'erro_diretorio') {
                $this->Flash->error(__('Erro de diretório, não foi possível salvar o produto, por favor, contacte o administrador do sistema.'));
            }
            else {
                if ($this->Produto->save($produto)) {
                    if ($produto->caminho_imagem) {
                        if ($this->Produto->uploadImagem($imagem, $produto->caminho_imagem)) {
                            $this->Flash->success(__('O produto (' . $produto->nome . ') foi salvo com sucesso.'));
                        }
                        else {
                            $this->Flash->success(__('O produto (' . $produto->nome . ') foi salvo com sucesso, porém não foi possível salvar a imagem.'));
                        }
                    }
                    else {
                        $this->Flash->success(__('O produto (' . $produto->nome . ') foi salvo com sucesso.'));
                    }
                }
                else {
                    $this->Flash->success(__('Não foi possível salvar o produto, ferifique se todos os dados estão corretos.'));
                }
            }
        }
        $categoria = $this->Produto->Categoria->find('list', [
            'keyField' => 'id',
            'valueField' => 'descricao',
            'limit' => 200
        ]);
        $this->set(compact('produto', 'categoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produto->get($id, [
            'contain' => ['Pedido']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produto->patchEntity($produto, $this->request->getData());
            if ($this->Produto->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $categoria = $this->Produto->Categoria->find('list', ['limit' => 200]);
        $pedido = $this->Produto->Pedido->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'categoria', 'pedido'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produto->get($id);
        if ($this->Produto->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
