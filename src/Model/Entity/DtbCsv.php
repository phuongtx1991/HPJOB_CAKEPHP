<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbCsv Entity
 *
 * @property int $no
 * @property int $csv_id
 * @property string $col
 * @property string $disp_name
 * @property int $rank
 * @property int $rw_flg
 * @property int $status
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property string $mb_convert_kana_option
 * @property string $size_const_type
 * @property string $error_check_types
 *
 * @property \App\Model\Entity\Csv $csv
 */
class DtbCsv extends Entity
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
        'csv_id' => true,
        'col' => true,
        'disp_name' => true,
        'rank' => true,
        'rw_flg' => true,
        'status' => true,
        'create_date' => true,
        'update_date' => true,
        'mb_convert_kana_option' => true,
        'size_const_type' => true,
        'error_check_types' => true,
        'csv' => true
    ];
}
