<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriaTable Test Case
 */
class CategoriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriaTable
     */
    public $Categoria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoria'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Categoria') ? [] : ['className' => CategoriaTable::class];
        $this->Categoria = TableRegistry::getTableLocator()->get('Categoria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categoria);

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

    /**
     * Test findProdutosPorCategoria method
     *
     * @return void
     */
    public function testFindProdutosPorCategoria()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
