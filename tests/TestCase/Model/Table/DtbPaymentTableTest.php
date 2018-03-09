<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPaymentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPaymentTable Test Case
 */
class DtbPaymentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPaymentTable
     */
    public $DtbPayment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_payment',
        'app.creators',
        'app.modules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPayment') ? [] : ['className' => DtbPaymentTable::class];
        $this->DtbPayment = TableRegistry::get('DtbPayment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPayment);

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
