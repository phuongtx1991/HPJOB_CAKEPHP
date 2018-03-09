<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPluginHookpointTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPluginHookpointTable Test Case
 */
class DtbPluginHookpointTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPluginHookpointTable
     */
    public $DtbPluginHookpoint;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_plugin_hookpoint',
        'app.plugins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPluginHookpoint') ? [] : ['className' => DtbPluginHookpointTable::class];
        $this->DtbPluginHookpoint = TableRegistry::get('DtbPluginHookpoint', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPluginHookpoint);

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
