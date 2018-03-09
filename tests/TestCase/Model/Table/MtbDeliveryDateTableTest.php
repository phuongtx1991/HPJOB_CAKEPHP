<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbDeliveryDateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbDeliveryDateTable Test Case
 */
class MtbDeliveryDateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbDeliveryDateTable
     */
    public $MtbDeliveryDate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_delivery_date'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbDeliveryDate') ? [] : ['className' => MtbDeliveryDateTable::class];
        $this->MtbDeliveryDate = TableRegistry::get('MtbDeliveryDate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbDeliveryDate);

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
