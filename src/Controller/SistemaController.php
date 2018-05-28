<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
        $usuario = TableRegistry::get('Usuario');

        /*$resultado = $usuario->get(1, [
            'contain' => [
                'Pessoa' => [
                    'PessoaFisica',
                    'Contato', 
                    'Endereco' => [
                        'Pais',
                        'Estado',
                        'Cidade'
                    ]
                ]
            ]
        ]);*/

        /*$this->paginate = [
            'contain' => ['Pessoa']
        ];
        $usuario = $this->paginate($this->Usuario);

        $this->set(compact('usuario'));*/
    }
}
