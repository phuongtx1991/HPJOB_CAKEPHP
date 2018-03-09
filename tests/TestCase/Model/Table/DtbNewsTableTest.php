<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbNewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbNewsTable Test Case
 */
class DtbNewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbNewsTable
     */
    public $DtbNews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_news',
        'app.creators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbNews') ? [] : ['className' => DtbNewsTable::class];
        $this->DtbNews = TableRegistry::get('DtbNews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbNews);

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
