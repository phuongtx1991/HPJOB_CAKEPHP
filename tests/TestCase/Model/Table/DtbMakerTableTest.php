<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMakerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMakerTable Test Case
 */
class DtbMakerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMakerTable
     */
    public $DtbMaker;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_maker',
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
        $config = TableRegistry::exists('DtbMaker') ? [] : ['className' => DtbMakerTable::class];
        $this->DtbMaker = TableRegistry::get('DtbMaker', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMaker);

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
