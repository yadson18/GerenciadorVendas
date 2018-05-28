<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PessoaJuridica Controller
 *
 * @property \App\Model\Table\PessoaJuridicaTable $PessoaJuridica
 *
 * @method \App\Model\Entity\PessoaJuridica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PessoaJuridicaController extends AppController
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
        $pessoaJuridica = $this->paginate($this->PessoaJuridica);

        $this->set(compact('pessoaJuridica'));
    }

    /**
     * View method
     *
     * @param string|null $id Pessoa Juridica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pessoaJuridica = $this->PessoaJuridica->get($id, [
            'contain' => ['Pessoa']
        ]);

        $this->set('pessoaJuridica', $pessoaJuridica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pessoaJuridica = $this->PessoaJuridica->newEntity();
        if ($this->request->is('post')) {
            $pessoaJuridica = $this->PessoaJuridica->patchEntity($pessoaJuridica, $this->request->getData());
            if ($this->PessoaJuridica->save($pessoaJuridica)) {
                $this->Flash->success(__('The pessoa juridica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa juridica could not be saved. Please, try again.'));
        }
        $pessoa = $this->PessoaJuridica->Pessoa->find('list', ['limit' => 200]);
        $this->set(compact('pessoaJuridica', 'pessoa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pessoa Juridica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pessoaJuridica = $this->PessoaJuridica->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoaJuridica = $this->PessoaJuridica->patchEntity($pessoaJuridica, $this->request->getData());
            if ($this->PessoaJuridica->save($pessoaJuridica)) {
                $this->Flash->success(__('The pessoa juridica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa juridica could not be saved. Please, try again.'));
        }
        $pessoa = $this->PessoaJuridica->Pessoa->find('list', ['limit' => 200]);
        $this->set(compact('pessoaJuridica', 'pessoa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pessoa Juridica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoaJuridica = $this->PessoaJuridica->get($id);
        if ($this->PessoaJuridica->delete($pessoaJuridica)) {
            $this->Flash->success(__('The pessoa juridica has been deleted.'));
        } else {
            $this->Flash->error(__('The pessoa juridica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
