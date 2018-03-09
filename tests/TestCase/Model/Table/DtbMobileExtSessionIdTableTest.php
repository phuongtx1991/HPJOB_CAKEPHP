<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMobileExtSessionIdTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMobileExtSessionIdTable Test Case
 */
class DtbMobileExtSessionIdTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMobileExtSessionIdTable
     */
    public $DtbMobileExtSessionId;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_mobile_ext_session_id'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbMobileExtSessionId') ? [] : ['className' => DtbMobileExtSessionIdTable::class];
        $this->DtbMobileExtSessionId = TableRegistry::get('DtbMobileExtSessionId', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMobileExtSessionId);

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
