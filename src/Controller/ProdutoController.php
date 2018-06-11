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
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Conversor');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $filtro = [];
        $this->paginate = ['limit' => 24, 'fields' => [
            'id', 'nome', 'descricao', 'valor_venda', 
            'caminho_imagem', 'quantidade_estoque'
        ]];
        if ($this->request->getParam('?')) {
            $filtro = $this->request->getParam('?');
            if (isset($filtro['categoria'])) {
                $categorias = array_map('intval', array_values($filtro['categoria']));

                $this->paginate['conditions'] = ['Produto.categoria_id IN' => $categorias];
            }
            else if (isset($filtro['busca'])) {
                $this->paginate['conditions'] = ['OR' => [
                    'Produto.codigo_produto LIKE' => '%' . $filtro['busca'] . '%',
                    'Produto.nome LIKE' => '%' . $filtro['busca'] . '%',
                    'Produto.descricao LIKE' => '%' . $filtro['busca'] . '%'
                ]];
            }
        }
        $produto = $this->paginate($this->Produto);
        $categoria = $this->Produto->Categoria->find('treeList', [
            'keyPath' => 'id',
            'valuePath' => 'descricao',
            'spacer' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        ]);
        $this->set(compact('produto', 'categoria', 'filtro'));
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
            'contain' => ['Categoria', 'UsuarioCriacao', 'UsuarioAlteracao'],
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
            $imagem = $this->Produto->validarImagem($this->request->getData('imagem'));
            if (!$imagem['erro']) {
                $produto = $this->Produto->patchEntity($produto, $this->request->getData('produto'));
                $produto->valor_compra = $this->Conversor->moneyToFloat($produto->valor_compra);
                $produto->valor_venda = $this->Conversor->moneyToFloat($produto->valor_venda);
                $produto->alterado_por = $this->Auth->user('id');
                $produto->criado_por = $this->Auth->user('id');
                if (isset($imagem['destino']) && isset($imagem['nome'])) {
                    $produto->caminho_imagem = $imagem['destino'] . $imagem['nome'];
                }
                if (!$produto->errors() && $this->Produto->save($produto)) {
                    if (isset($produto->caminho_imagem)) {
                        if ($this->Produto->uploadImagem($imagem)) {
                            $this->Flash->success(__('O produto (' . $produto->nome . ') foi salvo com sucesso.'));
                        }
                        else {
                            $this->Flash->warning(__('O produto (' . $produto->nome . ') foi salvo com sucesso, porém não foi possível salvar a imagem.'));
                        }
                    }
                    else {
                        $this->Flash->success(__('O produto (' . $produto->nome . ') foi salvo com sucesso.'));
                    }
                }
                else {
                    $erros = '';
                    foreach ($produto->errors() as $regras) {
                        foreach ($regras as $mensagem) {
                            $erros .= '<li>' . $mensagem . '</li>';
                        }
                    }
                    $formato = '%s<ul class="error-list">%s</ul>';
                    $mensagem = '<strong>Não foi possível salvar o produto.</strong><br>';
                    $this->Flash->error(sprintf($formato, $mensagem, $erros), ['escape' => false]);
                }
            }
            else {
                $this->Flash->error(__($imagem['mensagem']));
            }
        }
        $categoria = $this->Produto->Categoria->find('treeList', [
            'keyPath' => 'id',
            'valuePath' => 'descricao',
            'spacer' => '&nbsp;&nbsp;'
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
