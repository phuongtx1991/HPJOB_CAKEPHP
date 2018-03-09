<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCustomerFavoriteProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCustomerFavoriteProductsTable Test Case
 */
class DtbCustomerFavoriteProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCustomerFavoriteProductsTable
     */
    public $DtbCustomerFavoriteProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_customer_favorite_products',
        'app.customers',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCustomerFavoriteProducts') ? [] : ['className' => DtbCustomerFavoriteProductsTable::class];
        $this->DtbCustomerFavoriteProducts = TableRegistry::get('DtbCustomerFavoriteProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCustomerFavoriteProducts);

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
