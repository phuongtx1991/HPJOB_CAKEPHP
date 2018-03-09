<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCsvSqlSqlIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCsvSqlSqlIdSeqTable Test Case
 */
class DtbCsvSqlSqlIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCsvSqlSqlIdSeqTable
     */
    public $DtbCsvSqlSqlIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_csv_sql_sql_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCsvSqlSqlIdSeq') ? [] : ['className' => DtbCsvSqlSqlIdSeqTable::class];
        $this->DtbCsvSqlSqlIdSeq = TableRegistry::get('DtbCsvSqlSqlIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCsvSqlSqlIdSeq);

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
