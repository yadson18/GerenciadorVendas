<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contato Controller
 *
 * @property \App\Model\Table\ContatoTable $Contato
 *
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contato = $this->paginate($this->Contato);

        $this->set(compact('contato'));
    }

    /**
     * View method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contato = $this->Contato->get($id, [
            'contain' => ['Pessoa']
        ]);

        $this->set('contato', $contato);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contato = $this->Contato->newEntity();
        if ($this->request->is('post')) {
            $contato = $this->Contato->patchEntity($contato, $this->request->getData());
            if ($this->Contato->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contato could not be saved. Please, try again.'));
        }
        $this->set(compact('contato'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contato = $this->Contato->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contato = $this->Contato->patchEntity($contato, $this->request->getData());
            if ($this->Contato->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contato could not be saved. Please, try again.'));
        }
        $this->set(compact('contato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contato = $this->Contato->get($id);
        if ($this->Contato->delete($contato)) {
            $this->Flash->success(__('The contato has been deleted.'));
        } else {
            $this->Flash->error(__('The contato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
