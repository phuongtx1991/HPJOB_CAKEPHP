<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbMailMagazineTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbMailMagazineTypeTable Test Case
 */
class MtbMailMagazineTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbMailMagazineTypeTable
     */
    public $MtbMailMagazineType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_mail_magazine_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbMailMagazineType') ? [] : ['className' => MtbMailMagazineTypeTable::class];
        $this->MtbMailMagazineType = TableRegistry::get('MtbMailMagazineType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbMailMagazineType);

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
