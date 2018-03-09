<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbAllowedTagTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbAllowedTagTable Test Case
 */
class MtbAllowedTagTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbAllowedTagTable
     */
    public $MtbAllowedTag;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_allowed_tag'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbAllowedTag') ? [] : ['className' => MtbAllowedTagTable::class];
        $this->MtbAllowedTag = TableRegistry::get('MtbAllowedTag', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbAllowedTag);

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
