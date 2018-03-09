<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbCsvSql Entity
 *
 * @property int $sql_id
 * @property string $sql_name
 * @property string $csv_sql
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 */
class DtbCsvSql extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'sql_name' => true,
        'csv_sql' => true,
        'create_date' => true,
        'update_date' => true
    ];
}
