<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParcelaFixture
 *
 */
class ParcelaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'parcela';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'data_vencimento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'data_pagamento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'pedido_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_parcela_pedido1_idx' => ['type' => 'index', 'columns' => ['pedido_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_unique' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_parcela_pedido1' => ['type' => 'foreign', 'columns' => ['pedido_id'], 'references' => ['pedido', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'data_vencimento' => '2018-05-28',
                'data_pagamento' => '2018-05-28',
                'pedido_id' => 1
            ],
        ];
        parent::init();
    }
}
