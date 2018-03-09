<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbTemplatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbTemplatesTable Test Case
 */
class DtbTemplatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbTemplatesTable
     */
    public $DtbTemplates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_templates',
        'app.device_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbTemplates') ? [] : ['className' => DtbTemplatesTable::class];
        $this->DtbTemplates = TableRegistry::get('DtbTemplates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbTemplates);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
