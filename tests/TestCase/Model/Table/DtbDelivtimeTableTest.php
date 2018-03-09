<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbDelivtimeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbDelivtimeTable Test Case
 */
class DtbDelivtimeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbDelivtimeTable
     */
    public $DtbDelivtime;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_delivtime',
        'app.delivs',
        'app.times'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbDelivtime') ? [] : ['className' => DtbDelivtimeTable::class];
        $this->DtbDelivtime = TableRegistry::get('DtbDelivtime', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbDelivtime);

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
