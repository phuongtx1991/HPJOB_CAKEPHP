<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbStatusImageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbStatusImageTable Test Case
 */
class MtbStatusImageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbStatusImageTable
     */
    public $MtbStatusImage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_status_image'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbStatusImage') ? [] : ['className' => MtbStatusImageTable::class];
        $this->MtbStatusImage = TableRegistry::get('MtbStatusImage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbStatusImage);

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
