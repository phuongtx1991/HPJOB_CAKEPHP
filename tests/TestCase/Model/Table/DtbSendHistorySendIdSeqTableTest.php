<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbSendHistorySendIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbSendHistorySendIdSeqTable Test Case
 */
class DtbSendHistorySendIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbSendHistorySendIdSeqTable
     */
    public $DtbSendHistorySendIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_send_history_send_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbSendHistorySendIdSeq') ? [] : ['className' => DtbSendHistorySendIdSeqTable::class];
        $this->DtbSendHistorySendIdSeq = TableRegistry::get('DtbSendHistorySendIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbSendHistorySendIdSeq);

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
