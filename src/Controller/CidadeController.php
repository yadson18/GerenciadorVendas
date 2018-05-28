<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cidade Controller
 *
 * @property \App\Model\Table\CidadeTable $Cidade
 *
 * @method \App\Model\Entity\Cidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CidadeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estado']
        ];
        $cidade = $this->paginate($this->Cidade);

        $this->set(compact('cidade'));
    }

    /**
     * View method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cidade = $this->Cidade->get($id, [
            'contain' => ['Estado', 'Endereco']
        ]);

        $this->set('cidade', $cidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cidade = $this->Cidade->newEntity();
        if ($this->request->is('post')) {
            $cidade = $this->Cidade->patchEntity($cidade, $this->request->getData());
            if ($this->Cidade->save($cidade)) {
                $this->Flash->success(__('The cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cidade could not be saved. Please, try again.'));
        }
        $estado = $this->Cidade->Estado->find('list', ['limit' => 200]);
        $this->set(compact('cidade', 'estado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cidade = $this->Cidade->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cidade = $this->Cidade->patchEntity($cidade, $this->request->getData());
            if ($this->Cidade->save($cidade)) {
                $this->Flash->success(__('The cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cidade could not be saved. Please, try again.'));
        }
        $estado = $this->Cidade->Estado->find('list', ['limit' => 200]);
        $this->set(compact('cidade', 'estado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cidade = $this->Cidade->get($id);
        if ($this->Cidade->delete($cidade)) {
            $this->Flash->success(__('The cidade has been deleted.'));
        } else {
            $this->Flash->error(__('The cidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
