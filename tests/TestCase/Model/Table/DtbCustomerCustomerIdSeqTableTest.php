<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCustomerCustomerIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCustomerCustomerIdSeqTable Test Case
 */
class DtbCustomerCustomerIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCustomerCustomerIdSeqTable
     */
    public $DtbCustomerCustomerIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_customer_customer_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCustomerCustomerIdSeq') ? [] : ['className' => DtbCustomerCustomerIdSeqTable::class];
        $this->DtbCustomerCustomerIdSeq = TableRegistry::get('DtbCustomerCustomerIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCustomerCustomerIdSeq);

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
