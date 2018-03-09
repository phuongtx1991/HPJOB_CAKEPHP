<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbClasscategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbClasscategoryTable Test Case
 */
class DtbClasscategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbClasscategoryTable
     */
    public $DtbClasscategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_classcategory',
        'app.classes',
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
        $config = TableRegistry::exists('DtbClasscategory') ? [] : ['className' => DtbClasscategoryTable::class];
        $this->DtbClasscategory = TableRegistry::get('DtbClasscategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbClasscategory);

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
