<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ColaboradorFixture
 *
 */
class ColaboradorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'colaborador';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'criado_por' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_criacao' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'alterado_por' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_alteracao' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'pessoa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_colaborador_pessoa1_idx' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'fk_colaborador_usuario1_idx' => ['type' => 'index', 'columns' => ['criado_por'], 'length' => []],
            'fk_colaborador_usuario2_idx' => ['type' => 'index', 'columns' => ['alterado_por'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_unique' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'pessoa_id_unique' => ['type' => 'unique', 'columns' => ['pessoa_id'], 'length' => []],
            'fk_colaborador_pessoa1' => ['type' => 'foreign', 'columns' => ['pessoa_id'], 'references' => ['pessoa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_colaborador_usuario1' => ['type' => 'foreign', 'columns' => ['criado_por'], 'references' => ['usuario', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_colaborador_usuario2' => ['type' => 'foreign', 'columns' => ['alterado_por'], 'references' => ['usuario', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'criado_por' => 1,
                'data_criacao' => 1527482347,
                'alterado_por' => 1,
                'data_alteracao' => 1527482347,
                'pessoa_id' => 1
            ],
        ];
        parent::init();
    }
}
