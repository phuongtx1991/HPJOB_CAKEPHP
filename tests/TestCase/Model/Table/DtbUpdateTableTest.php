<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbUpdateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbUpdateTable Test Case
 */
class DtbUpdateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbUpdateTable
     */
    public $DtbUpdate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_update'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbUpdate') ? [] : ['className' => DtbUpdateTable::class];
        $this->DtbUpdate = TableRegistry::get('DtbUpdate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbUpdate);

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
