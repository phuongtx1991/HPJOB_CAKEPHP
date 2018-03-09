<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbWdayTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbWdayTable Test Case
 */
class MtbWdayTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbWdayTable
     */
    public $MtbWday;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_wday'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbWday') ? [] : ['className' => MtbWdayTable::class];
        $this->MtbWday = TableRegistry::get('MtbWday', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbWday);

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
