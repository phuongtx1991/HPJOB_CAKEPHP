<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbApiConfigApiConfigIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbApiConfigApiConfigIdSeqTable Test Case
 */
class DtbApiConfigApiConfigIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbApiConfigApiConfigIdSeqTable
     */
    public $DtbApiConfigApiConfigIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_api_config_api_config_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbApiConfigApiConfigIdSeq') ? [] : ['className' => DtbApiConfigApiConfigIdSeqTable::class];
        $this->DtbApiConfigApiConfigIdSeq = TableRegistry::get('DtbApiConfigApiConfigIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbApiConfigApiConfigIdSeq);

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
