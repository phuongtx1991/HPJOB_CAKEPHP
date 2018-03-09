<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbCategoryCountTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbCategoryCountTable Test Case
 */
class DtbCategoryCountTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbCategoryCountTable
     */
    public $DtbCategoryCount;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_category_count'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbCategoryCount') ? [] : ['className' => DtbCategoryCountTable::class];
        $this->DtbCategoryCount = TableRegistry::get('DtbCategoryCount', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbCategoryCount);

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
