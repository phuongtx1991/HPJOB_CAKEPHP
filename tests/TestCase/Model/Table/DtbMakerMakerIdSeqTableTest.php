<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMakerMakerIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMakerMakerIdSeqTable Test Case
 */
class DtbMakerMakerIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMakerMakerIdSeqTable
     */
    public $DtbMakerMakerIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_maker_maker_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbMakerMakerIdSeq') ? [] : ['className' => DtbMakerMakerIdSeqTable::class];
        $this->DtbMakerMakerIdSeq = TableRegistry::get('DtbMakerMakerIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMakerMakerIdSeq);

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
