<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbBkupTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbBkupTable Test Case
 */
class DtbBkupTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbBkupTable
     */
    public $DtbBkup;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_bkup'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbBkup') ? [] : ['className' => DtbBkupTable::class];
        $this->DtbBkup = TableRegistry::get('DtbBkup', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbBkup);

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
