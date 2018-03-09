<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbDelivTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbDelivTable Test Case
 */
class DtbDelivTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbDelivTable
     */
    public $DtbDeliv;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_deliv',
        'app.product_types',
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
        $config = TableRegistry::exists('DtbDeliv') ? [] : ['className' => DtbDelivTable::class];
        $this->DtbDeliv = TableRegistry::get('DtbDeliv', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbDeliv);

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
