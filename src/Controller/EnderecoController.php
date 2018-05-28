<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Endereco Controller
 *
 * @property \App\Model\Table\EnderecoTable $Endereco
 *
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnderecoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pais', 'Estado', 'Cidade']
        ];
        $endereco = $this->paginate($this->Endereco);

        $this->set(compact('endereco'));
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Endereco->get($id, [
            'contain' => ['Pais', 'Estado', 'Cidade', 'Pessoa']
        ]);

        $this->set('endereco', $endereco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Endereco->newEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Endereco->patchEntity($endereco, $this->request->getData());
            if ($this->Endereco->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
        }
        $pais = $this->Endereco->Pais->find('list', ['limit' => 200]);
        $estado = $this->Endereco->Estado->find('list', ['limit' => 200]);
        $cidade = $this->Endereco->Cidade->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'pais', 'estado', 'cidade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Endereco->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Endereco->patchEntity($endereco, $this->request->getData());
            if ($this->Endereco->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
        }
        $pais = $this->Endereco->Pais->find('list', ['limit' => 200]);
        $estado = $this->Endereco->Estado->find('list', ['limit' => 200]);
        $cidade = $this->Endereco->Cidade->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'pais', 'estado', 'cidade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Endereco->get($id);
        if ($this->Endereco->delete($endereco)) {
            $this->Flash->success(__('The endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The endereco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
