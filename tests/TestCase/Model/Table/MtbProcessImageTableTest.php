<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbProcessImageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbProcessImageTable Test Case
 */
class MtbProcessImageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbProcessImageTable
     */
    public $MtbProcessImage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_process_image'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbProcessImage') ? [] : ['className' => MtbProcessImageTable::class];
        $this->MtbProcessImage = TableRegistry::get('MtbProcessImage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbProcessImage);

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
