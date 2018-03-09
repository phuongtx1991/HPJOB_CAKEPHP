<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbOrderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbOrderTable Test Case
 */
class DtbOrderTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbOrderTable
     */
    public $DtbOrder;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_order',
        'app.order_temps',
        'app.customers',
        'app.order_countries',
        'app.delivs',
        'app.payments',
        'app.device_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbOrder') ? [] : ['className' => DtbOrderTable::class];
        $this->DtbOrder = TableRegistry::get('DtbOrder', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbOrder);

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
