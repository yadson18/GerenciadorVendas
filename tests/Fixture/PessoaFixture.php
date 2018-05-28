<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PessoaFixture
 *
 */
class PessoaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pessoa';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'contato_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_pessoa_contato1_idx' => ['type' => 'index', 'columns' => ['contato_id'], 'length' => []],
            'fk_pessoa_endereco1_idx' => ['type' => 'index', 'columns' => ['endereco_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_unique' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'contato_id_unique' => ['type' => 'unique', 'columns' => ['contato_id'], 'length' => []],
            'endereco_id_unique' => ['type' => 'unique', 'columns' => ['endereco_id'], 'length' => []],
            'fk_pessoa_contato1' => ['type' => 'foreign', 'columns' => ['contato_id'], 'references' => ['contato', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pessoa_endereco1' => ['type' => 'foreign', 'columns' => ['endereco_id'], 'references' => ['endereco', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'contato_id' => 1,
                'endereco_id' => 1
            ],
        ];
        parent::init();
    }
}
