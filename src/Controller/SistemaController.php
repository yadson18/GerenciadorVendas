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
        $cliente = TableRegistry::get('Cliente')->find('estatisticaBasica')->first();
        $produto = TableRegistry::get('Produto')->find('estatisticaBasica')->first();
        $colaborador = TableRegistry::get('Colaborador')->find('estatisticaBasica')->first();
        $pedido = TableRegistry::get('Pedido')->find('estatisticaBasica')->first();

        $this->set(compact('cliente','produto','colaborador','pedido'));
    }
}
