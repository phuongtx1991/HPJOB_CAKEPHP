<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMailmagaTemplateTemplateIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMailmagaTemplateTemplateIdSeqTable Test Case
 */
class DtbMailmagaTemplateTemplateIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMailmagaTemplateTemplateIdSeqTable
     */
    public $DtbMailmagaTemplateTemplateIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_mailmaga_template_template_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbMailmagaTemplateTemplateIdSeq') ? [] : ['className' => DtbMailmagaTemplateTemplateIdSeqTable::class];
        $this->DtbMailmagaTemplateTemplateIdSeq = TableRegistry::get('DtbMailmagaTemplateTemplateIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMailmagaTemplateTemplateIdSeq);

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
