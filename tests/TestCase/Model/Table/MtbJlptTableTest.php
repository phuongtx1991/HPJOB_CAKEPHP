<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbJlptTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbJlptTable Test Case
 */
class MtbJlptTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbJlptTable
     */
    public $MtbJlpt;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_jlpt'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbJlpt') ? [] : ['className' => MtbJlptTable::class];
        $this->MtbJlpt = TableRegistry::get('MtbJlpt', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbJlpt);

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
