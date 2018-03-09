<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMakerCountTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMakerCountTable Test Case
 */
class DtbMakerCountTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMakerCountTable
     */
    public $DtbMakerCount;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_maker_count'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbMakerCount') ? [] : ['className' => DtbMakerCountTable::class];
        $this->DtbMakerCount = TableRegistry::get('DtbMakerCount', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMakerCount);

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
