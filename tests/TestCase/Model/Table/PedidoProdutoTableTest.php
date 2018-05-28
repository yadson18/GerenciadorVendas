<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidoProdutoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidoProdutoTable Test Case
 */
class PedidoProdutoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidoProdutoTable
     */
    public $PedidoProduto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedido_produto',
        'app.pedido',
        'app.produto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PedidoProduto') ? [] : ['className' => PedidoProdutoTable::class];
        $this->PedidoProduto = TableRegistry::getTableLocator()->get('PedidoProduto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PedidoProduto);

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
