<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbDelivDelivIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbDelivDelivIdSeqTable Test Case
 */
class DtbDelivDelivIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbDelivDelivIdSeqTable
     */
    public $DtbDelivDelivIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_deliv_deliv_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbDelivDelivIdSeq') ? [] : ['className' => DtbDelivDelivIdSeqTable::class];
        $this->DtbDelivDelivIdSeq = TableRegistry::get('DtbDelivDelivIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbDelivDelivIdSeq);

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
