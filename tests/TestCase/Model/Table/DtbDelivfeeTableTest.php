<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbDelivfeeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbDelivfeeTable Test Case
 */
class DtbDelivfeeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbDelivfeeTable
     */
    public $DtbDelivfee;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_delivfee',
        'app.delivs',
        'app.fees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbDelivfee') ? [] : ['className' => DtbDelivfeeTable::class];
        $this->DtbDelivfee = TableRegistry::get('DtbDelivfee', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbDelivfee);

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
