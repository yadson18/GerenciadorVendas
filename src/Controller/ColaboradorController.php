<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colaborador Controller
 *
 * @property \App\Model\Table\ColaboradorTable $Colaborador
 *
 * @method \App\Model\Entity\Colaborador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ColaboradorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pessoa']
        ];
        $colaborador = $this->paginate($this->Colaborador);

        $this->set(compact('colaborador'));
    }

    /**
     * View method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colaborador = $this->Colaborador->get($id, [
            'contain' => ['Pessoa']
        ]);

        $this->set('colaborador', $colaborador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colaborador = $this->Colaborador->newEntity();
        if ($this->request->is('post')) {
            $colaborador = $this->Colaborador->patchEntity($colaborador, $this->request->getData());
            if ($this->Colaborador->save($colaborador)) {
                $this->Flash->success(__('The colaborador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colaborador could not be saved. Please, try again.'));
        }
        $pessoa = $this->Colaborador->Pessoa->find('list', ['limit' => 200]);
        $this->set(compact('colaborador', 'pessoa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colaborador = $this->Colaborador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colaborador = $this->Colaborador->patchEntity($colaborador, $this->request->getData());
            if ($this->Colaborador->save($colaborador)) {
                $this->Flash->success(__('The colaborador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colaborador could not be saved. Please, try again.'));
        }
        $pessoa = $this->Colaborador->Pessoa->find('list', ['limit' => 200]);
        $this->set(compact('colaborador', 'pessoa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colaborador = $this->Colaborador->get($id);
        if ($this->Colaborador->delete($colaborador)) {
            $this->Flash->success(__('The colaborador has been deleted.'));
        } else {
            $this->Flash->error(__('The colaborador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
