<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbBlocpositionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbBlocpositionTable Test Case
 */
class DtbBlocpositionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbBlocpositionTable
     */
    public $DtbBlocposition;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_blocposition',
        'app.device_types',
        'app.pages',
        'app.targets',
        'app.blocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbBlocposition') ? [] : ['className' => DtbBlocpositionTable::class];
        $this->DtbBlocposition = TableRegistry::get('DtbBlocposition', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbBlocposition);

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
