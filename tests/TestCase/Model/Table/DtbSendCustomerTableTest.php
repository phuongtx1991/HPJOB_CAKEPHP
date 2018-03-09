<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbSendCustomerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbSendCustomerTable Test Case
 */
class DtbSendCustomerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbSendCustomerTable
     */
    public $DtbSendCustomer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_send_customer',
        'app.customers',
        'app.sends'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbSendCustomer') ? [] : ['className' => DtbSendCustomerTable::class];
        $this->DtbSendCustomer = TableRegistry::get('DtbSendCustomer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbSendCustomer);

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
