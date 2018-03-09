<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbKiyakuTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbKiyakuTable Test Case
 */
class DtbKiyakuTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbKiyakuTable
     */
    public $DtbKiyaku;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_kiyaku',
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
        $config = TableRegistry::exists('DtbKiyaku') ? [] : ['className' => DtbKiyakuTable::class];
        $this->DtbKiyaku = TableRegistry::get('DtbKiyaku', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbKiyaku);

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
