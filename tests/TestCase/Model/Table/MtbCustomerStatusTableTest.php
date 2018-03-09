<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbCustomerStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbCustomerStatusTable Test Case
 */
class MtbCustomerStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbCustomerStatusTable
     */
    public $MtbCustomerStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_customer_status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbCustomerStatus') ? [] : ['className' => MtbCustomerStatusTable::class];
        $this->MtbCustomerStatus = TableRegistry::get('MtbCustomerStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbCustomerStatus);

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
