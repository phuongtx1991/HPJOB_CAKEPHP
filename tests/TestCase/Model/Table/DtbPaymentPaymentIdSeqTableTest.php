<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPaymentPaymentIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPaymentPaymentIdSeqTable Test Case
 */
class DtbPaymentPaymentIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPaymentPaymentIdSeqTable
     */
    public $DtbPaymentPaymentIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_payment_payment_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPaymentPaymentIdSeq') ? [] : ['className' => DtbPaymentPaymentIdSeqTable::class];
        $this->DtbPaymentPaymentIdSeq = TableRegistry::get('DtbPaymentPaymentIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPaymentPaymentIdSeq);

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
