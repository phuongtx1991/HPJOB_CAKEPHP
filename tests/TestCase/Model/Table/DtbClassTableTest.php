<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbClassTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbClassTable Test Case
 */
class DtbClassTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbClassTable
     */
    public $DtbClass;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_class',
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
        $config = TableRegistry::exists('DtbClass') ? [] : ['className' => DtbClassTable::class];
        $this->DtbClass = TableRegistry::get('DtbClass', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbClass);

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
