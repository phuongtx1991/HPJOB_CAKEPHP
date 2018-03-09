<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbReviewReviewIdSeqTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbReviewReviewIdSeqTable Test Case
 */
class DtbReviewReviewIdSeqTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbReviewReviewIdSeqTable
     */
    public $DtbReviewReviewIdSeq;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_review_review_id_seq'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbReviewReviewIdSeq') ? [] : ['className' => DtbReviewReviewIdSeqTable::class];
        $this->DtbReviewReviewIdSeq = TableRegistry::get('DtbReviewReviewIdSeq', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbReviewReviewIdSeq);

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
