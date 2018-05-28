<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidoFixture
 *
 */
class PedidoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pedido';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'data_pedido' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'valor_pedido' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'forma_pagamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'encomendado_por' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'despachado_por' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_pedido_cliente1_idx' => ['type' => 'index', 'columns' => ['encomendado_por'], 'length' => []],
            'fk_pedido_usuario1_idx' => ['type' => 'index', 'columns' => ['despachado_por'], 'length' => []],
            'fk_pedido_forma_pagamento1_idx' => ['type' => 'index', 'columns' => ['forma_pagamento_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_unique' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_pedido_cliente1' => ['type' => 'foreign', 'columns' => ['encomendado_por'], 'references' => ['cliente', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pedido_forma_pagamento1' => ['type' => 'foreign', 'columns' => ['forma_pagamento_id'], 'references' => ['forma_pagamento', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pedido_usuario1' => ['type' => 'foreign', 'columns' => ['despachado_por'], 'references' => ['usuario', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'data_pedido' => 1527482347,
                'valor_pedido' => 1.5,
                'forma_pagamento_id' => 1,
                'encomendado_por' => 1,
                'despachado_por' => 1
            ],
        ];
        parent::init();
    }
}
