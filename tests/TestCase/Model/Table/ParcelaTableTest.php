<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParcelaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParcelaTable Test Case
 */
class ParcelaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ParcelaTable
     */
    public $Parcela;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.parcela',
        'app.pedido'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Parcela') ? [] : ['className' => ParcelaTable::class];
        $this->Parcela = TableRegistry::getTableLocator()->get('Parcela', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parcela);

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
