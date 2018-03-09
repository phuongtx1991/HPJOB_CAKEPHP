<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbIndexListTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbIndexListTable Test Case
 */
class DtbIndexListTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbIndexListTable
     */
    public $DtbIndexList;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_index_list'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbIndexList') ? [] : ['className' => DtbIndexListTable::class];
        $this->DtbIndexList = TableRegistry::get('DtbIndexList', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbIndexList);

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
