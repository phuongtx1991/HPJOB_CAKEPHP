<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbDeviceTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbDeviceTypeTable Test Case
 */
class MtbDeviceTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbDeviceTypeTable
     */
    public $MtbDeviceType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_device_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbDeviceType') ? [] : ['className' => MtbDeviceTypeTable::class];
        $this->MtbDeviceType = TableRegistry::get('MtbDeviceType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbDeviceType);

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
