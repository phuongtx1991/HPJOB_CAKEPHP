<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbBestProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbBestProductsTable Test Case
 */
class DtbBestProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbBestProductsTable
     */
    public $DtbBestProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_best_products',
        'app.categories',
        'app.products',
        'app.creators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbBestProducts') ? [] : ['className' => DtbBestProductsTable::class];
        $this->DtbBestProducts = TableRegistry::get('DtbBestProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbBestProducts);

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
