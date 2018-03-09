<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbObjectTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbObjectTable Test Case
 */
class MtbObjectTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbObjectTable
     */
    public $MtbObject;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_object'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbObject') ? [] : ['className' => MtbObjectTable::class];
        $this->MtbObject = TableRegistry::get('MtbObject', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbObject);

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
