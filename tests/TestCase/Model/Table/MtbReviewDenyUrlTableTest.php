<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbReviewDenyUrlTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbReviewDenyUrlTable Test Case
 */
class MtbReviewDenyUrlTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbReviewDenyUrlTable
     */
    public $MtbReviewDenyUrl;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_review_deny_url'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbReviewDenyUrl') ? [] : ['className' => MtbReviewDenyUrlTable::class];
        $this->MtbReviewDenyUrl = TableRegistry::get('MtbReviewDenyUrl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbReviewDenyUrl);

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
