<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbMagazineTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbMagazineTypeTable Test Case
 */
class MtbMagazineTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbMagazineTypeTable
     */
    public $MtbMagazineType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_magazine_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbMagazineType') ? [] : ['className' => MtbMagazineTypeTable::class];
        $this->MtbMagazineType = TableRegistry::get('MtbMagazineType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbMagazineType);

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
