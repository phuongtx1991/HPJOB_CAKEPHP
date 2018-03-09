<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbProductsProductIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbProductsProductIdSeqTable Test Case
 */
class DtbProductsProductIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbProductsProductIdSeqTable
     */
    public $DtbProductsProductIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_products_product_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbProductsProductIdSeq') ? [] : ['className' => DtbProductsProductIdSeqTable::class];
        $this->DtbProductsProductIdSeq = TableRegistry::get('DtbProductsProductIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbProductsProductIdSeq);

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
