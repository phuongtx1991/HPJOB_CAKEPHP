<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbApiAccountApiAccountIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbApiAccountApiAccountIdSeqTable Test Case
 */
class DtbApiAccountApiAccountIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbApiAccountApiAccountIdSeqTable
     */
    public $DtbApiAccountApiAccountIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_api_account_api_account_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbApiAccountApiAccountIdSeq') ? [] : ['className' => DtbApiAccountApiAccountIdSeqTable::class];
        $this->DtbApiAccountApiAccountIdSeq = TableRegistry::get('DtbApiAccountApiAccountIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbApiAccountApiAccountIdSeq);

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
