<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbClientTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbClientTable Test Case
 */
class DtbClientTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbClientTable
     */
    public $DtbClient;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_client'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbClient') ? [] : ['className' => DtbClientTable::class];
        $this->DtbClient = TableRegistry::get('DtbClient', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbClient);

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
