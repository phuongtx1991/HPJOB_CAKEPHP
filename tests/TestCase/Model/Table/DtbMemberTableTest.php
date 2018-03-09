<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbMemberTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbMemberTable Test Case
 */
class DtbMemberTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbMemberTable
     */
    public $DtbMember;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_member',
        'app.logins',
        'app.creators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbMember') ? [] : ['className' => DtbMemberTable::class];
        $this->DtbMember = TableRegistry::get('DtbMember', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbMember);

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
