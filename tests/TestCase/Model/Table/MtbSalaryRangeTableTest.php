<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbSalaryRangeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbSalaryRangeTable Test Case
 */
class MtbSalaryRangeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbSalaryRangeTable
     */
    public $MtbSalaryRange;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_salary_range',
        'app.currencies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbSalaryRange') ? [] : ['className' => MtbSalaryRangeTable::class];
        $this->MtbSalaryRange = TableRegistry::get('MtbSalaryRange', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbSalaryRange);

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
