<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbModuleUpdateLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbModuleUpdateLogsTable Test Case
 */
class DtbModuleUpdateLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbModuleUpdateLogsTable
     */
    public $DtbModuleUpdateLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_module_update_logs',
        'app.modules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbModuleUpdateLogs') ? [] : ['className' => DtbModuleUpdateLogsTable::class];
        $this->DtbModuleUpdateLogs = TableRegistry::get('DtbModuleUpdateLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbModuleUpdateLogs);

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
