<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPluginPluginIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPluginPluginIdSeqTable Test Case
 */
class DtbPluginPluginIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPluginPluginIdSeqTable
     */
    public $DtbPluginPluginIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_plugin_plugin_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPluginPluginIdSeq') ? [] : ['className' => DtbPluginPluginIdSeqTable::class];
        $this->DtbPluginPluginIdSeq = TableRegistry::get('DtbPluginPluginIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPluginPluginIdSeq);

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
