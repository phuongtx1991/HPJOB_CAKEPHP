<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbBlocTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbBlocTable Test Case
 */
class DtbBlocTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbBlocTable
     */
    public $DtbBloc;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_bloc',
        'app.device_types',
        'app.blocs',
        'app.plugins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbBloc') ? [] : ['className' => DtbBlocTable::class];
        $this->DtbBloc = TableRegistry::get('DtbBloc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbBloc);

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
