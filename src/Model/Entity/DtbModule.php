<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbModule Entity
 *
 * @property int $module_id
 * @property string $module_code
 * @property string $module_name
 * @property string $sub_data
 * @property int $auto_update_flg
 * @property int $del_flg
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 */
class DtbModule extends Entity
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
        'module_code' => true,
        'module_name' => true,
        'sub_data' => true,
        'auto_update_flg' => true,
        'del_flg' => true,
        'create_date' => true,
        'update_date' => true
    ];
}
