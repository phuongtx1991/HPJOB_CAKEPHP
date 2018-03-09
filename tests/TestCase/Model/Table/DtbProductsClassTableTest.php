<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbProductsClassTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbProductsClassTable Test Case
 */
class DtbProductsClassTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbProductsClassTable
     */
    public $DtbProductsClass;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_products_class',
        'app.products',
        'app.product_types',
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
        $config = TableRegistry::exists('DtbProductsClass') ? [] : ['className' => DtbProductsClassTable::class];
        $this->DtbProductsClass = TableRegistry::get('DtbProductsClass', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbProductsClass);

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
