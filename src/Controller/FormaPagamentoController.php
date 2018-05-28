<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormaPagamento Controller
 *
 * @property \App\Model\Table\FormaPagamentoTable $FormaPagamento
 *
 * @method \App\Model\Entity\FormaPagamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormaPagamentoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $formaPagamento = $this->paginate($this->FormaPagamento);

        $this->set(compact('formaPagamento'));
    }

    /**
     * View method
     *
     * @param string|null $id Forma Pagamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formaPagamento = $this->FormaPagamento->get($id, [
            'contain' => ['Pedido']
        ]);

        $this->set('formaPagamento', $formaPagamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formaPagamento = $this->FormaPagamento->newEntity();
        if ($this->request->is('post')) {
            $formaPagamento = $this->FormaPagamento->patchEntity($formaPagamento, $this->request->getData());
            if ($this->FormaPagamento->save($formaPagamento)) {
                $this->Flash->success(__('The forma pagamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forma pagamento could not be saved. Please, try again.'));
        }
        $this->set(compact('formaPagamento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Forma Pagamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formaPagamento = $this->FormaPagamento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formaPagamento = $this->FormaPagamento->patchEntity($formaPagamento, $this->request->getData());
            if ($this->FormaPagamento->save($formaPagamento)) {
                $this->Flash->success(__('The forma pagamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forma pagamento could not be saved. Please, try again.'));
        }
        $this->set(compact('formaPagamento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Forma Pagamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formaPagamento = $this->FormaPagamento->get($id);
        if ($this->FormaPagamento->delete($formaPagamento)) {
            $this->Flash->success(__('The forma pagamento has been deleted.'));
        } else {
            $this->Flash->error(__('The forma pagamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
