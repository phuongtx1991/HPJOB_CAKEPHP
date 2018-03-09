<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbOrderOrderIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbOrderOrderIdSeqTable Test Case
 */
class DtbOrderOrderIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbOrderOrderIdSeqTable
     */
    public $DtbOrderOrderIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_order_order_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbOrderOrderIdSeq') ? [] : ['className' => DtbOrderOrderIdSeqTable::class];
        $this->DtbOrderOrderIdSeq = TableRegistry::get('DtbOrderOrderIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbOrderOrderIdSeq);

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
