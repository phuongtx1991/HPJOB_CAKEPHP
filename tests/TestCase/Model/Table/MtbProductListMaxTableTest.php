<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbProductListMaxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbProductListMaxTable Test Case
 */
class MtbProductListMaxTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbProductListMaxTable
     */
    public $MtbProductListMax;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_product_list_max'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbProductListMax') ? [] : ['className' => MtbProductListMaxTable::class];
        $this->MtbProductListMax = TableRegistry::get('MtbProductListMax', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbProductListMax);

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
