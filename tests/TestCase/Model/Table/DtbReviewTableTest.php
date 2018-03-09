<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbReviewTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbReviewTable Test Case
 */
class DtbReviewTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbReviewTable
     */
    public $DtbReview;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_review',
        'app.products',
        'app.customers',
        'app.creators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbReview') ? [] : ['className' => DtbReviewTable::class];
        $this->DtbReview = TableRegistry::get('DtbReview', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbReview);

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
