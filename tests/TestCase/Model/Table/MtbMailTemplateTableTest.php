<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbMailTemplateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbMailTemplateTable Test Case
 */
class MtbMailTemplateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbMailTemplateTable
     */
    public $MtbMailTemplate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_mail_template'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbMailTemplate') ? [] : ['className' => MtbMailTemplateTable::class];
        $this->MtbMailTemplate = TableRegistry::get('MtbMailTemplate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbMailTemplate);

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
