<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbOtherDelivTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbOtherDelivTable Test Case
 */
class DtbOtherDelivTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbOtherDelivTable
     */
    public $DtbOtherDeliv;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_other_deliv',
        'app.customers',
        'app.countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbOtherDeliv') ? [] : ['className' => DtbOtherDelivTable::class];
        $this->DtbOtherDeliv = TableRegistry::get('DtbOtherDeliv', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbOtherDeliv);

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
