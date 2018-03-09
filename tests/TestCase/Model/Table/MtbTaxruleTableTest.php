<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbTaxruleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbTaxruleTable Test Case
 */
class MtbTaxruleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbTaxruleTable
     */
    public $MtbTaxrule;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_taxrule'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbTaxrule') ? [] : ['className' => MtbTaxruleTable::class];
        $this->MtbTaxrule = TableRegistry::get('MtbTaxrule', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbTaxrule);

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
