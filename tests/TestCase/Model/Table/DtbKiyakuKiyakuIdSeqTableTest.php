<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbKiyakuKiyakuIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbKiyakuKiyakuIdSeqTable Test Case
 */
class DtbKiyakuKiyakuIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbKiyakuKiyakuIdSeqTable
     */
    public $DtbKiyakuKiyakuIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_kiyaku_kiyaku_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbKiyakuKiyakuIdSeq') ? [] : ['className' => DtbKiyakuKiyakuIdSeqTable::class];
        $this->DtbKiyakuKiyakuIdSeq = TableRegistry::get('DtbKiyakuKiyakuIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbKiyakuKiyakuIdSeq);

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
