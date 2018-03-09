<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbOrderStatusColorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbOrderStatusColorTable Test Case
 */
class MtbOrderStatusColorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbOrderStatusColorTable
     */
    public $MtbOrderStatusColor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_order_status_color'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbOrderStatusColor') ? [] : ['className' => MtbOrderStatusColorTable::class];
        $this->MtbOrderStatusColor = TableRegistry::get('MtbOrderStatusColor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbOrderStatusColor);

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
