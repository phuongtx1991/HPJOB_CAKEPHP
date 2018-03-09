<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbStatusTable Test Case
 */
class MtbStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbStatusTable
     */
    public $MtbStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbStatus') ? [] : ['className' => MtbStatusTable::class];
        $this->MtbStatus = TableRegistry::get('MtbStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbStatus);

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
