<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PedidoProduto Controller
 *
 * @property \App\Model\Table\PedidoProdutoTable $PedidoProduto
 *
 * @method \App\Model\Entity\PedidoProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PedidoProdutoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedido', 'Produto']
        ];
        $pedidoProduto = $this->paginate($this->PedidoProduto);

        $this->set(compact('pedidoProduto'));
    }

    /**
     * View method
     *
     * @param string|null $id Pedido Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidoProduto = $this->PedidoProduto->get($id, [
            'contain' => ['Pedido', 'Produto']
        ]);

        $this->set('pedidoProduto', $pedidoProduto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedidoProduto = $this->PedidoProduto->newEntity();
        if ($this->request->is('post')) {
            $pedidoProduto = $this->PedidoProduto->patchEntity($pedidoProduto, $this->request->getData());
            if ($this->PedidoProduto->save($pedidoProduto)) {
                $this->Flash->success(__('The pedido produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido produto could not be saved. Please, try again.'));
        }
        $pedido = $this->PedidoProduto->Pedido->find('list', ['limit' => 200]);
        $produto = $this->PedidoProduto->Produto->find('list', ['limit' => 200]);
        $this->set(compact('pedidoProduto', 'pedido', 'produto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidoProduto = $this->PedidoProduto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidoProduto = $this->PedidoProduto->patchEntity($pedidoProduto, $this->request->getData());
            if ($this->PedidoProduto->save($pedidoProduto)) {
                $this->Flash->success(__('The pedido produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido produto could not be saved. Please, try again.'));
        }
        $pedido = $this->PedidoProduto->Pedido->find('list', ['limit' => 200]);
        $produto = $this->PedidoProduto->Produto->find('list', ['limit' => 200]);
        $this->set(compact('pedidoProduto', 'pedido', 'produto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidoProduto = $this->PedidoProduto->get($id);
        if ($this->PedidoProduto->delete($pedidoProduto)) {
            $this->Flash->success(__('The pedido produto has been deleted.'));
        } else {
            $this->Flash->error(__('The pedido produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
