<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DtbBestProductsBestIdSeqFixture
 *
 */
class DtbBestProductsBestIdSeqFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dtb_best_products_best_id_seq';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'sequence' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['sequence'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'sequence' => 1
        ],
    ];
}
