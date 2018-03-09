<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbProductsClassProductClassIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbProductsClassProductClassIdSeqTable Test Case
 */
class DtbProductsClassProductClassIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbProductsClassProductClassIdSeqTable
     */
    public $DtbProductsClassProductClassIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_products_class_product_class_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbProductsClassProductClassIdSeq') ? [] : ['className' => DtbProductsClassProductClassIdSeqTable::class];
        $this->DtbProductsClassProductClassIdSeq = TableRegistry::get('DtbProductsClassProductClassIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbProductsClassProductClassIdSeq);

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
