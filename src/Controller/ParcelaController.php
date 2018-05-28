<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parcela Controller
 *
 * @property \App\Model\Table\ParcelaTable $Parcela
 *
 * @method \App\Model\Entity\Parcela[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParcelaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedido']
        ];
        $parcela = $this->paginate($this->Parcela);

        $this->set(compact('parcela'));
    }

    /**
     * View method
     *
     * @param string|null $id Parcela id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parcela = $this->Parcela->get($id, [
            'contain' => ['Pedido']
        ]);

        $this->set('parcela', $parcela);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parcela = $this->Parcela->newEntity();
        if ($this->request->is('post')) {
            $parcela = $this->Parcela->patchEntity($parcela, $this->request->getData());
            if ($this->Parcela->save($parcela)) {
                $this->Flash->success(__('The parcela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parcela could not be saved. Please, try again.'));
        }
        $pedido = $this->Parcela->Pedido->find('list', ['limit' => 200]);
        $this->set(compact('parcela', 'pedido'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Parcela id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parcela = $this->Parcela->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parcela = $this->Parcela->patchEntity($parcela, $this->request->getData());
            if ($this->Parcela->save($parcela)) {
                $this->Flash->success(__('The parcela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parcela could not be saved. Please, try again.'));
        }
        $pedido = $this->Parcela->Pedido->find('list', ['limit' => 200]);
        $this->set(compact('parcela', 'pedido'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Parcela id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parcela = $this->Parcela->get($id);
        if ($this->Parcela->delete($parcela)) {
            $this->Flash->success(__('The parcela has been deleted.'));
        } else {
            $this->Flash->error(__('The parcela could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
