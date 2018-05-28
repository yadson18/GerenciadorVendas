<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PessoaFisica Controller
 *
 * @property \App\Model\Table\PessoaFisicaTable $PessoaFisica
 *
 * @method \App\Model\Entity\PessoaFisica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PessoaFisicaController extends AppController
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
        $pessoaFisica = $this->paginate($this->PessoaFisica);

        $this->set(compact('pessoaFisica'));
    }

    /**
     * View method
     *
     * @param string|null $id Pessoa Fisica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pessoaFisica = $this->PessoaFisica->get($id, [
            'contain' => ['Pessoa']
        ]);

        $this->set('pessoaFisica', $pessoaFisica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pessoaFisica = $this->PessoaFisica->newEntity();
        if ($this->request->is('post')) {
            $pessoaFisica = $this->PessoaFisica->patchEntity($pessoaFisica, $this->request->getData());
            if ($this->PessoaFisica->save($pessoaFisica)) {
                $this->Flash->success(__('The pessoa fisica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa fisica could not be saved. Please, try again.'));
        }
        $pessoa = $this->PessoaFisica->Pessoa->find('list', ['limit' => 200]);
        $this->set(compact('pessoaFisica', 'pessoa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pessoa Fisica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pessoaFisica = $this->PessoaFisica->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoaFisica = $this->PessoaFisica->patchEntity($pessoaFisica, $this->request->getData());
            if ($this->PessoaFisica->save($pessoaFisica)) {
                $this->Flash->success(__('The pessoa fisica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa fisica could not be saved. Please, try again.'));
        }
        $pessoa = $this->PessoaFisica->Pessoa->find('list', ['limit' => 200]);
        $this->set(compact('pessoaFisica', 'pessoa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pessoa Fisica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoaFisica = $this->PessoaFisica->get($id);
        if ($this->PessoaFisica->delete($pessoaFisica)) {
            $this->Flash->success(__('The pessoa fisica has been deleted.'));
        } else {
            $this->Flash->error(__('The pessoa fisica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
