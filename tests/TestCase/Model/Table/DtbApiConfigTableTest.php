<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbApiConfigTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbApiConfigTable Test Case
 */
class DtbApiConfigTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbApiConfigTable
     */
    public $DtbApiConfig;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_api_config'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbApiConfig') ? [] : ['className' => DtbApiConfigTable::class];
        $this->DtbApiConfig = TableRegistry::get('DtbApiConfig', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbApiConfig);

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
