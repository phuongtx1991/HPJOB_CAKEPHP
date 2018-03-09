<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCategoryTotalCountTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCategoryTotalCountTable Test Case
 */
class DtbCategoryTotalCountTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCategoryTotalCountTable
     */
    public $DtbCategoryTotalCount;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_category_total_count'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCategoryTotalCount') ? [] : ['className' => DtbCategoryTotalCountTable::class];
        $this->DtbCategoryTotalCount = TableRegistry::get('DtbCategoryTotalCount', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCategoryTotalCount);

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
