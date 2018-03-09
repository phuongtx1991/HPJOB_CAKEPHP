<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbApiConfig Entity
 *
 * @property int $api_config_id
 * @property string $operation_name
 * @property string $operation_description
 * @property string $auth_types
 * @property int $enable
 * @property int $is_log
 * @property string $sub_data
 * @property int $del_flg
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 */
class DtbApiConfig extends Entity
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
        'operation_name' => true,
        'operation_description' => true,
        'auth_types' => true,
        'enable' => true,
        'is_log' => true,
        'sub_data' => true,
        'del_flg' => true,
        'create_date' => true,
        'update_date' => true
    ];
}
