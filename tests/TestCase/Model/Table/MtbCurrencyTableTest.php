<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbCurrencyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbCurrencyTable Test Case
 */
class MtbCurrencyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbCurrencyTable
     */
    public $MtbCurrency;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_currency'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtbCurrency') ? [] : ['className' => MtbCurrencyTable::class];
        $this->MtbCurrency = TableRegistry::get('MtbCurrency', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbCurrency);

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
