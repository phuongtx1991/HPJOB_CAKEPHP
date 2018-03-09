<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbRecommendProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbRecommendProductsTable Test Case
 */
class DtbRecommendProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbRecommendProductsTable
     */
    public $DtbRecommendProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_recommend_products',
        'app.products',
        'app.recommend_products',
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
        $config = TableRegistry::exists('DtbRecommendProducts') ? [] : ['className' => DtbRecommendProductsTable::class];
        $this->DtbRecommendProducts = TableRegistry::get('DtbRecommendProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbRecommendProducts);

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
