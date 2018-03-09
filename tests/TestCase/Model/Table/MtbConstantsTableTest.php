<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbConstantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbConstantsTable Test Case
 */
class MtbConstantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbConstantsTable
     */
    public $MtbConstants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_constants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbConstants') ? [] : ['className' => MtbConstantsTable::class];
        $this->MtbConstants = TableRegistry::get('MtbConstants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbConstants);

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
