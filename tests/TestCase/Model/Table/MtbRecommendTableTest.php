<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbRecommendTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbRecommendTable Test Case
 */
class MtbRecommendTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbRecommendTable
     */
    public $MtbRecommend;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_recommend'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbRecommend') ? [] : ['className' => MtbRecommendTable::class];
        $this->MtbRecommend = TableRegistry::get('MtbRecommend', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbRecommend);

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
