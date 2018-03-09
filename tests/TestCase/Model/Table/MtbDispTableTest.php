<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbDispTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbDispTable Test Case
 */
class MtbDispTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbDispTable
     */
    public $MtbDisp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_disp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbDisp') ? [] : ['className' => MtbDispTable::class];
        $this->MtbDisp = TableRegistry::get('MtbDisp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbDisp);

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
