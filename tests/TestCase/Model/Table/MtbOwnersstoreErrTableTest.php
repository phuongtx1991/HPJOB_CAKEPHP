<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbOwnersstoreErrTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbOwnersstoreErrTable Test Case
 */
class MtbOwnersstoreErrTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbOwnersstoreErrTable
     */
    public $MtbOwnersstoreErr;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_ownersstore_err'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbOwnersstoreErr') ? [] : ['className' => MtbOwnersstoreErrTable::class];
        $this->MtbOwnersstoreErr = TableRegistry::get('MtbOwnersstoreErr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbOwnersstoreErr);

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
