<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistema Controller
 *
 * @property \App\Model\Table\SistemaTable $Sistema
 *
 * @method \App\Model\Entity\Sistema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemaController extends AppController
{

    /**
     * Home method
     *
     * @return \Cake\Http\Response|void
     */
    public function home()
    {
        /*$this->paginate = [
            'contain' => ['Pessoa']
        ];
        $usuario = $this->paginate($this->Usuario);

        $this->set(compact('usuario'));*/
    }
}
