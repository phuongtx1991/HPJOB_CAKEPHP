<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPagelayoutPageIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPagelayoutPageIdSeqTable Test Case
 */
class DtbPagelayoutPageIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPagelayoutPageIdSeqTable
     */
    public $DtbPagelayoutPageIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_pagelayout_page_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPagelayoutPageIdSeq') ? [] : ['className' => DtbPagelayoutPageIdSeqTable::class];
        $this->DtbPagelayoutPageIdSeq = TableRegistry::get('DtbPagelayoutPageIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPagelayoutPageIdSeq);

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
