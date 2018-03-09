<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbBloc Entity
 *
 * @property int $device_type_id
 * @property int $bloc_id
 * @property string $bloc_name
 * @property string $tpl_path
 * @property string $filename
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property string $php_path
 * @property int $deletable_flg
 * @property int $plugin_id
 *
 * @property \App\Model\Entity\DeviceType $device_type
 * @property \App\Model\Entity\Bloc $bloc
 * @property \App\Model\Entity\Plugin $plugin
 */
class DtbBloc extends Entity
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
        'bloc_name' => true,
        'tpl_path' => true,
        'filename' => true,
        'create_date' => true,
        'update_date' => true,
        'php_path' => true,
        'deletable_flg' => true,
        'plugin_id' => true,
        'device_type' => true,
        'bloc' => true,
        'plugin' => true
    ];
}
