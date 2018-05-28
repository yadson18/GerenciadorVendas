<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PessoaJuridicaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PessoaJuridicaTable Test Case
 */
class PessoaJuridicaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PessoaJuridicaTable
     */
    public $PessoaJuridica;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pessoa_juridica',
        'app.pessoa'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PessoaJuridica') ? [] : ['className' => PessoaJuridicaTable::class];
        $this->PessoaJuridica = TableRegistry::getTableLocator()->get('PessoaJuridica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PessoaJuridica);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
