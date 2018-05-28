<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pedido Controller
 *
 * @property \App\Model\Table\PedidoTable $Pedido
 *
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PedidoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FormaPagamento']
        ];
        $pedido = $this->paginate($this->Pedido);

        $this->set(compact('pedido'));
    }

    /**
     * View method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedido = $this->Pedido->get($id, [
            'contain' => ['FormaPagamento', 'Produto', 'Parcela']
        ]);

        $this->set('pedido', $pedido);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedido = $this->Pedido->newEntity();
        if ($this->request->is('post')) {
            $pedido = $this->Pedido->patchEntity($pedido, $this->request->getData());
            if ($this->Pedido->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
        }
        $formaPagamento = $this->Pedido->FormaPagamento->find('list', ['limit' => 200]);
        $produto = $this->Pedido->Produto->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'formaPagamento', 'produto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedido = $this->Pedido->get($id, [
            'contain' => ['Produto']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedido->patchEntity($pedido, $this->request->getData());
            if ($this->Pedido->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
        }
        $formaPagamento = $this->Pedido->FormaPagamento->find('list', ['limit' => 200]);
        $produto = $this->Pedido->Produto->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'formaPagamento', 'produto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedido->get($id);
        if ($this->Pedido->delete($pedido)) {
            $this->Flash->success(__('The pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The pedido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
