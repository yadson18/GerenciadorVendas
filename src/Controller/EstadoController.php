<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estado Controller
 *
 * @property \App\Model\Table\EstadoTable $Estado
 *
 * @method \App\Model\Entity\Estado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstadoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pais']
        ];
        $estado = $this->paginate($this->Estado);

        $this->set(compact('estado'));
    }

    /**
     * View method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estado = $this->Estado->get($id, [
            'contain' => ['Pais', 'Cidade', 'Endereco']
        ]);

        $this->set('estado', $estado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estado = $this->Estado->newEntity();
        if ($this->request->is('post')) {
            $estado = $this->Estado->patchEntity($estado, $this->request->getData());
            if ($this->Estado->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $pais = $this->Estado->Pais->find('list', ['limit' => 200]);
        $this->set(compact('estado', 'pais'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estado = $this->Estado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estado = $this->Estado->patchEntity($estado, $this->request->getData());
            if ($this->Estado->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $pais = $this->Estado->Pais->find('list', ['limit' => 200]);
        $this->set(compact('estado', 'pais'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estado = $this->Estado->get($id);
        if ($this->Estado->delete($estado)) {
            $this->Flash->success(__('The estado has been deleted.'));
        } else {
            $this->Flash->error(__('The estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
