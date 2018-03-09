<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbPaymentOptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbPaymentOptionsTable Test Case
 */
class DtbPaymentOptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbPaymentOptionsTable
     */
    public $DtbPaymentOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_payment_options',
        'app.delivs',
        'app.payments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DtbPaymentOptions') ? [] : ['className' => DtbPaymentOptionsTable::class];
        $this->DtbPaymentOptions = TableRegistry::get('DtbPaymentOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbPaymentOptions);

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
