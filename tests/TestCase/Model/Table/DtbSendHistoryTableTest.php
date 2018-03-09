<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbSendHistoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbSendHistoryTable Test Case
 */
class DtbSendHistoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbSendHistoryTable
     */
    public $DtbSendHistory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_send_history',
        'app.creators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbSendHistory') ? [] : ['className' => DtbSendHistoryTable::class];
        $this->DtbSendHistory = TableRegistry::get('DtbSendHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbSendHistory);

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
