<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbZipTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbZipTable Test Case
 */
class MtbZipTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbZipTable
     */
    public $MtbZip;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_zip'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbZip') ? [] : ['className' => MtbZipTable::class];
        $this->MtbZip = TableRegistry::get('MtbZip', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbZip);

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
