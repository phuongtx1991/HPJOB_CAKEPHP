<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbOrderTempTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbOrderTempTable Test Case
 */
class DtbOrderTempTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbOrderTempTable
     */
    public $DtbOrderTemp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_order_temp',
        'app.customers',
        'app.order_countries',
        'app.delivs',
        'app.payments',
        'app.device_types',
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
        $config = TableRegistry::exists('DtbOrderTemp') ? [] : ['className' => DtbOrderTempTable::class];
        $this->DtbOrderTemp = TableRegistry::get('DtbOrderTemp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbOrderTemp);

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
