<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbCustomerOrderStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbCustomerOrderStatusTable Test Case
 */
class MtbCustomerOrderStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbCustomerOrderStatusTable
     */
    public $MtbCustomerOrderStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_customer_order_status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbCustomerOrderStatus') ? [] : ['className' => MtbCustomerOrderStatusTable::class];
        $this->MtbCustomerOrderStatus = TableRegistry::get('MtbCustomerOrderStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbCustomerOrderStatus);

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
}
