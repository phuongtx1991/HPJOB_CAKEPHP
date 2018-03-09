<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbAuthExcludesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbAuthExcludesTable Test Case
 */
class MtbAuthExcludesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbAuthExcludesTable
     */
    public $MtbAuthExcludes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_auth_excludes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbAuthExcludes') ? [] : ['className' => MtbAuthExcludesTable::class];
        $this->MtbAuthExcludes = TableRegistry::get('MtbAuthExcludes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbAuthExcludes);

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
