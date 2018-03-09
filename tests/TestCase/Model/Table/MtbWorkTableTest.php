<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbWorkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbWorkTable Test Case
 */
class MtbWorkTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbWorkTable
     */
    public $MtbWork;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_work'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbWork') ? [] : ['className' => MtbWorkTable::class];
        $this->MtbWork = TableRegistry::get('MtbWork', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbWork);

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
