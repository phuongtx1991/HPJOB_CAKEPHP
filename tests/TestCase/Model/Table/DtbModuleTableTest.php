<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbModuleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbModuleTable Test Case
 */
class DtbModuleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbModuleTable
     */
    public $DtbModule;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_module'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbModule') ? [] : ['className' => DtbModuleTable::class];
        $this->DtbModule = TableRegistry::get('DtbModule', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbModule);

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
