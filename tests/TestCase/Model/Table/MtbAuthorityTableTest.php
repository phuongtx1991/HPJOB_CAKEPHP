<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbAuthorityTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbAuthorityTable Test Case
 */
class MtbAuthorityTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbAuthorityTable
     */
    public $MtbAuthority;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_authority'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbAuthority') ? [] : ['className' => MtbAuthorityTable::class];
        $this->MtbAuthority = TableRegistry::get('MtbAuthority', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbAuthority);

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
