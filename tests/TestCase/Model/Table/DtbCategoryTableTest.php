<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCategoryTable Test Case
 */
class DtbCategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCategoryTable
     */
    public $DtbCategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_category',
        'app.parent_categories',
        'app.creators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCategory') ? [] : ['className' => DtbCategoryTable::class];
        $this->DtbCategory = TableRegistry::get('DtbCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCategory);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
