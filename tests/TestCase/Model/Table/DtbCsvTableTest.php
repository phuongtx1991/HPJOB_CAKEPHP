<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCsvTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCsvTable Test Case
 */
class DtbCsvTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCsvTable
     */
    public $DtbCsv;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_csv',
        'app.csvs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCsv') ? [] : ['className' => DtbCsvTable::class];
        $this->DtbCsv = TableRegistry::get('DtbCsv', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCsv);

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
