<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecoFixture
 *
 */
class EnderecoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'endereco';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cep' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'endereco' => ['type' => 'string', 'length' => 55, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero' => ['type' => 'string', 'length' => 6, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'complemento' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pais_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cidade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_endereco_pais1_idx' => ['type' => 'index', 'columns' => ['pais_id'], 'length' => []],
            'fk_endereco_estado1_idx' => ['type' => 'index', 'columns' => ['estado_id'], 'length' => []],
            'fk_endereco_cidade1_idx' => ['type' => 'index', 'columns' => ['cidade_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_unique' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_endereco_cidade1' => ['type' => 'foreign', 'columns' => ['cidade_id'], 'references' => ['cidade', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_endereco_estado1' => ['type' => 'foreign', 'columns' => ['estado_id'], 'references' => ['estado', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_endereco_pais1' => ['type' => 'foreign', 'columns' => ['pais_id'], 'references' => ['pais', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'cep' => 'Lorem ',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lore',
                'complemento' => 'Lorem ipsum dolor sit amet',
                'pais_id' => 1,
                'estado_id' => 1,
                'cidade_id' => 1
            ],
        ];
        parent::init();
    }
}
