<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMemberMemberIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMemberMemberIdSeqTable Test Case
 */
class DtbMemberMemberIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMemberMemberIdSeqTable
     */
    public $DtbMemberMemberIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_member_member_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbMemberMemberIdSeq') ? [] : ['className' => DtbMemberMemberIdSeqTable::class];
        $this->DtbMemberMemberIdSeq = TableRegistry::get('DtbMemberMemberIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMemberMemberIdSeq);

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
