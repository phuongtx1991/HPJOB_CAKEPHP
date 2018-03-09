<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbEducationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbEducationTable Test Case
 */
class MtbEducationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbEducationTable
     */
    public $MtbEducation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_education'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbEducation') ? [] : ['className' => MtbEducationTable::class];
        $this->MtbEducation = TableRegistry::get('MtbEducation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbEducation);

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
