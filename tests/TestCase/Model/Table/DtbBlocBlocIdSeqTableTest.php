<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbBlocBlocIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbBlocBlocIdSeqTable Test Case
 */
class DtbBlocBlocIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbBlocBlocIdSeqTable
     */
    public $DtbBlocBlocIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_bloc_bloc_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbBlocBlocIdSeq') ? [] : ['className' => DtbBlocBlocIdSeqTable::class];
        $this->DtbBlocBlocIdSeq = TableRegistry::get('DtbBlocBlocIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbBlocBlocIdSeq);

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
