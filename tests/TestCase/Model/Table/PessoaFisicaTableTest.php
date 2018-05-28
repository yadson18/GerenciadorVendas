<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PessoaFisicaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PessoaFisicaTable Test Case
 */
class PessoaFisicaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PessoaFisicaTable
     */
    public $PessoaFisica;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pessoa_fisica',
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
        $config = TableRegistry::getTableLocator()->exists('PessoaFisica') ? [] : ['className' => PessoaFisicaTable::class];
        $this->PessoaFisica = TableRegistry::getTableLocator()->get('PessoaFisica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PessoaFisica);

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
