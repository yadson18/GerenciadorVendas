<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidoProdutoFixture
 *
 */
class PedidoProdutoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pedido_produto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'quantidade' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'pedido_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_pedido_produto_pedido1_idx' => ['type' => 'index', 'columns' => ['pedido_id'], 'length' => []],
            'fk_pedido_produto_produto1_idx' => ['type' => 'index', 'columns' => ['produto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_unique' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_pedido_produto_pedido1' => ['type' => 'foreign', 'columns' => ['pedido_id'], 'references' => ['pedido', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pedido_produto_produto1' => ['type' => 'foreign', 'columns' => ['produto_id'], 'references' => ['produto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'quantidade' => 1,
                'pedido_id' => 1,
                'produto_id' => 1
            ],
        ];
        parent::init();
    }
}
