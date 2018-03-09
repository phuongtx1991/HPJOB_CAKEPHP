<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCategoryCategoryIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCategoryCategoryIdSeqTable Test Case
 */
class DtbCategoryCategoryIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCategoryCategoryIdSeqTable
     */
    public $DtbCategoryCategoryIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_category_category_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCategoryCategoryIdSeq') ? [] : ['className' => DtbCategoryCategoryIdSeqTable::class];
        $this->DtbCategoryCategoryIdSeq = TableRegistry::get('DtbCategoryCategoryIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCategoryCategoryIdSeq);

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
