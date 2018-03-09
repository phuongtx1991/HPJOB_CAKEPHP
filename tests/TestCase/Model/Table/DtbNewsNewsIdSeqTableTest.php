<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbNewsNewsIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbNewsNewsIdSeqTable Test Case
 */
class DtbNewsNewsIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbNewsNewsIdSeqTable
     */
    public $DtbNewsNewsIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_news_news_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbNewsNewsIdSeq') ? [] : ['className' => DtbNewsNewsIdSeqTable::class];
        $this->DtbNewsNewsIdSeq = TableRegistry::get('DtbNewsNewsIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbNewsNewsIdSeq);

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
