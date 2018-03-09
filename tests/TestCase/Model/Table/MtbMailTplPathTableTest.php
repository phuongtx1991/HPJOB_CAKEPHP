<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbMailTplPathTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbMailTplPathTable Test Case
 */
class MtbMailTplPathTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbMailTplPathTable
     */
    public $MtbMailTplPath;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_mail_tpl_path'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbMailTplPath') ? [] : ['className' => MtbMailTplPathTable::class];
        $this->MtbMailTplPath = TableRegistry::get('MtbMailTplPath', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbMailTplPath);

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
