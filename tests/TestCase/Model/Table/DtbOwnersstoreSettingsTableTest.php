<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbOwnersstoreSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbOwnersstoreSettingsTable Test Case
 */
class DtbOwnersstoreSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbOwnersstoreSettingsTable
     */
    public $DtbOwnersstoreSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_ownersstore_settings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbOwnersstoreSettings') ? [] : ['className' => DtbOwnersstoreSettingsTable::class];
        $this->DtbOwnersstoreSettings = TableRegistry::get('DtbOwnersstoreSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbOwnersstoreSettings);

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
