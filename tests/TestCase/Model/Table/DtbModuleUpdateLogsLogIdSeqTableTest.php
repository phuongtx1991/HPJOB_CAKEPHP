<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbModuleUpdateLogsLogIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbModuleUpdateLogsLogIdSeqTable Test Case
 */
class DtbModuleUpdateLogsLogIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbModuleUpdateLogsLogIdSeqTable
     */
    public $DtbModuleUpdateLogsLogIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_module_update_logs_log_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbModuleUpdateLogsLogIdSeq') ? [] : ['className' => DtbModuleUpdateLogsLogIdSeqTable::class];
        $this->DtbModuleUpdateLogsLogIdSeq = TableRegistry::get('DtbModuleUpdateLogsLogIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbModuleUpdateLogsLogIdSeq);

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
