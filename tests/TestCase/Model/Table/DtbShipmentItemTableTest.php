<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbShipmentItemTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbShipmentItemTable Test Case
 */
class DtbShipmentItemTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbShipmentItemTable
     */
    public $DtbShipmentItem;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_shipment_item',
        'app.shippings',
        'app.product_classes',
        'app.orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbShipmentItem') ? [] : ['className' => DtbShipmentItemTable::class];
        $this->DtbShipmentItem = TableRegistry::get('DtbShipmentItem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbShipmentItem);

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
