<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbShippingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbShippingTable Test Case
 */
class DtbShippingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbShippingTable
     */
    public $DtbShipping;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_shipping',
        'app.shippings',
        'app.orders',
        'app.shipping_countries',
        'app.times'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbShipping') ? [] : ['className' => DtbShippingTable::class];
        $this->DtbShipping = TableRegistry::get('DtbShipping', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbShipping);

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
