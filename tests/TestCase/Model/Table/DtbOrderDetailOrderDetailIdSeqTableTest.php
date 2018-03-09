<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbOrderDetailOrderDetailIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbOrderDetailOrderDetailIdSeqTable Test Case
 */
class DtbOrderDetailOrderDetailIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbOrderDetailOrderDetailIdSeqTable
     */
    public $DtbOrderDetailOrderDetailIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_order_detail_order_detail_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbOrderDetailOrderDetailIdSeq') ? [] : ['className' => DtbOrderDetailOrderDetailIdSeqTable::class];
        $this->DtbOrderDetailOrderDetailIdSeq = TableRegistry::get('DtbOrderDetailOrderDetailIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbOrderDetailOrderDetailIdSeq);

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
