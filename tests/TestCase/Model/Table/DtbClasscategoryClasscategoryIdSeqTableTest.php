<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbClasscategoryClasscategoryIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbClasscategoryClasscategoryIdSeqTable Test Case
 */
class DtbClasscategoryClasscategoryIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbClasscategoryClasscategoryIdSeqTable
     */
    public $DtbClasscategoryClasscategoryIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_classcategory_classcategory_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbClasscategoryClasscategoryIdSeq') ? [] : ['className' => DtbClasscategoryClasscategoryIdSeqTable::class];
        $this->DtbClasscategoryClasscategoryIdSeq = TableRegistry::get('DtbClasscategoryClasscategoryIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbClasscategoryClasscategoryIdSeq);

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
