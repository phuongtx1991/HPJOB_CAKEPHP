<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPluginHookpointPluginHookpointIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPluginHookpointPluginHookpointIdSeqTable Test Case
 */
class DtbPluginHookpointPluginHookpointIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPluginHookpointPluginHookpointIdSeqTable
     */
    public $DtbPluginHookpointPluginHookpointIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_plugin_hookpoint_plugin_hookpoint_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPluginHookpointPluginHookpointIdSeq') ? [] : ['className' => DtbPluginHookpointPluginHookpointIdSeqTable::class];
        $this->DtbPluginHookpointPluginHookpointIdSeq = TableRegistry::get('DtbPluginHookpointPluginHookpointIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPluginHookpointPluginHookpointIdSeq);

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
