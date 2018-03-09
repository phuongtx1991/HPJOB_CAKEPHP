<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCsvSqlTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCsvSqlTable Test Case
 */
class DtbCsvSqlTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCsvSqlTable
     */
    public $DtbCsvSql;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_csv_sql'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCsvSql') ? [] : ['className' => DtbCsvSqlTable::class];
        $this->DtbCsvSql = TableRegistry::get('DtbCsvSql', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCsvSql);

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
