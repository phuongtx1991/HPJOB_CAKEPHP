<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbDbTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbDbTable Test Case
 */
class MtbDbTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbDbTable
     */
    public $MtbDb;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_db'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbDb') ? [] : ['className' => MtbDbTable::class];
        $this->MtbDb = TableRegistry::get('MtbDb', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbDb);

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
