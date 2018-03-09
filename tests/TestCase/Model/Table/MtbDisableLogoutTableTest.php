<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbDisableLogoutTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbDisableLogoutTable Test Case
 */
class MtbDisableLogoutTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbDisableLogoutTable
     */
    public $MtbDisableLogout;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_disable_logout'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbDisableLogout') ? [] : ['className' => MtbDisableLogoutTable::class];
        $this->MtbDisableLogout = TableRegistry::get('MtbDisableLogout', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbDisableLogout);

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
