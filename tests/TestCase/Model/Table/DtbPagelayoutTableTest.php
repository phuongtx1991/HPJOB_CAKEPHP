<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPagelayoutTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPagelayoutTable Test Case
 */
class DtbPagelayoutTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPagelayoutTable
     */
    public $DtbPagelayout;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_pagelayout',
        'app.device_types',
        'app.pages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPagelayout') ? [] : ['className' => DtbPagelayoutTable::class];
        $this->DtbPagelayout = TableRegistry::get('DtbPagelayout', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPagelayout);

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
