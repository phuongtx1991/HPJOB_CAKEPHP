<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbTaxRuleTaxRuleIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbTaxRuleTaxRuleIdSeqTable Test Case
 */
class DtbTaxRuleTaxRuleIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbTaxRuleTaxRuleIdSeqTable
     */
    public $DtbTaxRuleTaxRuleIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_tax_rule_tax_rule_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbTaxRuleTaxRuleIdSeq') ? [] : ['className' => DtbTaxRuleTaxRuleIdSeqTable::class];
        $this->DtbTaxRuleTaxRuleIdSeq = TableRegistry::get('DtbTaxRuleTaxRuleIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbTaxRuleTaxRuleIdSeq);

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
