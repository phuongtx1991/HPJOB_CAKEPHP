<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMailmagaTemplateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMailmagaTemplateTable Test Case
 */
class DtbMailmagaTemplateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMailmagaTemplateTable
     */
    public $DtbMailmagaTemplate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_mailmaga_template',
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
        $config = TableRegistry::exists('DtbMailmagaTemplate') ? [] : ['className' => DtbMailmagaTemplateTable::class];
        $this->DtbMailmagaTemplate = TableRegistry::get('DtbMailmagaTemplate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMailmagaTemplate);

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
