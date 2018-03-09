<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbJobTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbJobTable Test Case
 */
class MtbJobTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbJobTable
     */
    public $MtbJob;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_job'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbJob') ? [] : ['className' => MtbJobTable::class];
        $this->MtbJob = TableRegistry::get('MtbJob', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbJob);

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
