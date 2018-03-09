<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbMailTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbMailTypeTable Test Case
 */
class MtbMailTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbMailTypeTable
     */
    public $MtbMailType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_mail_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbMailType') ? [] : ['className' => MtbMailTypeTable::class];
        $this->MtbMailType = TableRegistry::get('MtbMailType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbMailType);

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
