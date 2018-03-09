<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbHolidayHolidayIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbHolidayHolidayIdSeqTable Test Case
 */
class DtbHolidayHolidayIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbHolidayHolidayIdSeqTable
     */
    public $DtbHolidayHolidayIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_holiday_holiday_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbHolidayHolidayIdSeq') ? [] : ['className' => DtbHolidayHolidayIdSeqTable::class];
        $this->DtbHolidayHolidayIdSeq = TableRegistry::get('DtbHolidayHolidayIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbHolidayHolidayIdSeq);

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
