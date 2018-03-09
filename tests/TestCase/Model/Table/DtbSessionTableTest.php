<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbSessionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbSessionTable Test Case
 */
class DtbSessionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbSessionTable
     */
    public $DtbSession;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_session'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbSession') ? [] : ['className' => DtbSessionTable::class];
        $this->DtbSession = TableRegistry::get('DtbSession', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbSession);

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
