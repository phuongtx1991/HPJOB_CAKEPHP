<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbOtherDelivOtherDelivIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbOtherDelivOtherDelivIdSeqTable Test Case
 */
class DtbOtherDelivOtherDelivIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbOtherDelivOtherDelivIdSeqTable
     */
    public $DtbOtherDelivOtherDelivIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_other_deliv_other_deliv_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbOtherDelivOtherDelivIdSeq') ? [] : ['className' => DtbOtherDelivOtherDelivIdSeqTable::class];
        $this->DtbOtherDelivOtherDelivIdSeq = TableRegistry::get('DtbOtherDelivOtherDelivIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbOtherDelivOtherDelivIdSeq);

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
