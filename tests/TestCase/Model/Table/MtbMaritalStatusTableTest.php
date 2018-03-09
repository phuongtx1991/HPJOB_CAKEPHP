<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbMaritalStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbMaritalStatusTable Test Case
 */
class MtbMaritalStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbMaritalStatusTable
     */
    public $MtbMaritalStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_marital_status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbMaritalStatus') ? [] : ['className' => MtbMaritalStatusTable::class];
        $this->MtbMaritalStatus = TableRegistry::get('MtbMaritalStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbMaritalStatus);

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
