<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbTargetTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbTargetTable Test Case
 */
class MtbTargetTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbTargetTable
     */
    public $MtbTarget;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_target'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbTarget') ? [] : ['className' => MtbTargetTable::class];
        $this->MtbTarget = TableRegistry::get('MtbTarget', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbTarget);

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
