<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbSalaryTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbSalaryTypeTable Test Case
 */
class MtbSalaryTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbSalaryTypeTable
     */
    public $MtbSalaryType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_salary_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbSalaryType') ? [] : ['className' => MtbSalaryTypeTable::class];
        $this->MtbSalaryType = TableRegistry::get('MtbSalaryType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbSalaryType);

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
