<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PessoaFisicaFixture
 *
 */
class PessoaFisicaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pessoa_fisica';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'rg' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cpf' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nome' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'data_nascimento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'pessoa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_pessoa_fisica_pessoa1_idx' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_unique' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'cpf_unique' => ['type' => 'unique', 'columns' => ['cpf'], 'length' => []],
            'pessoa_id_unique' => ['type' => 'unique', 'columns' => ['pessoa_id'], 'length' => []],
            'rg_unique' => ['type' => 'unique', 'columns' => ['rg'], 'length' => []],
            'fk_pessoa_fisica_pessoa1' => ['type' => 'foreign', 'columns' => ['pessoa_id'], 'references' => ['pessoa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'rg' => 'Lorem i',
                'cpf' => 'Lorem ips',
                'nome' => 'Lorem ipsum dolor sit amet',
                'data_nascimento' => '2018-05-28',
                'pessoa_id' => 1
            ],
        ];
        parent::init();
    }
}
