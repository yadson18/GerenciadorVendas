<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pessoa Controller
 *
 * @property \App\Model\Table\PessoaTable $Pessoa
 *
 * @method \App\Model\Entity\Pessoa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PessoaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contato', 'Endereco']
        ];
        $pessoa = $this->paginate($this->Pessoa);

        $this->set(compact('pessoa'));
    }

    /**
     * View method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pessoa = $this->Pessoa->get($id, [
            'contain' => ['Contato', 'Endereco', 'Cliente', 'Colaborador', 'PessoaFisica', 'PessoaJuridica', 'Usuario']
        ]);

        $this->set('pessoa', $pessoa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pessoa = $this->Pessoa->newEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoa->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoa->save($pessoa)) {
                $this->Flash->success(__('The pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa could not be saved. Please, try again.'));
        }
        $contato = $this->Pessoa->Contato->find('list', ['limit' => 200]);
        $endereco = $this->Pessoa->Endereco->find('list', ['limit' => 200]);
        $this->set(compact('pessoa', 'contato', 'endereco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pessoa = $this->Pessoa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoa->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoa->save($pessoa)) {
                $this->Flash->success(__('The pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa could not be saved. Please, try again.'));
        }
        $contato = $this->Pessoa->Contato->find('list', ['limit' => 200]);
        $endereco = $this->Pessoa->Endereco->find('list', ['limit' => 200]);
        $this->set(compact('pessoa', 'contato', 'endereco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoa = $this->Pessoa->get($id);
        if ($this->Pessoa->delete($pessoa)) {
            $this->Flash->success(__('The pessoa has been deleted.'));
        } else {
            $this->Flash->error(__('The pessoa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
