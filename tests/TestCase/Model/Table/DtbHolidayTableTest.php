<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbHolidayTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbHolidayTable Test Case
 */
class DtbHolidayTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbHolidayTable
     */
    public $DtbHoliday;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_holiday',
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
        $config = TableRegistry::exists('DtbHoliday') ? [] : ['className' => DtbHolidayTable::class];
        $this->DtbHoliday = TableRegistry::get('DtbHoliday', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbHoliday);

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
