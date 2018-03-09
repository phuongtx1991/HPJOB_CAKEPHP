<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbApiAccountTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbApiAccountTable Test Case
 */
class DtbApiAccountTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbApiAccountTable
     */
    public $DtbApiAccount;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_api_account'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbApiAccount') ? [] : ['className' => DtbApiAccountTable::class];
        $this->DtbApiAccount = TableRegistry::get('DtbApiAccount', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbApiAccount);

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
