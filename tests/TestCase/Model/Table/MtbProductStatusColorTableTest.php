<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbProductStatusColorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbProductStatusColorTable Test Case
 */
class MtbProductStatusColorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbProductStatusColorTable
     */
    public $MtbProductStatusColor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_product_status_color'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbProductStatusColor') ? [] : ['className' => MtbProductStatusColorTable::class];
        $this->MtbProductStatusColor = TableRegistry::get('MtbProductStatusColor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbProductStatusColor);

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
