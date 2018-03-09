<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbUpdate Entity
 *
 * @property int $module_id
 * @property string $module_name
 * @property string $now_version
 * @property string $latest_version
 * @property string $module_explain
 * @property string $main_php
 * @property string $extern_php
 * @property string $install_sql
 * @property string $uninstall_sql
 * @property string $other_files
 * @property int $del_flg
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property \Cake\I18n\FrozenTime $release_date
 */
class DtbUpdate extends Entity
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
        'module_name' => true,
        'now_version' => true,
        'latest_version' => true,
        'module_explain' => true,
        'main_php' => true,
        'extern_php' => true,
        'install_sql' => true,
        'uninstall_sql' => true,
        'other_files' => true,
        'del_flg' => true,
        'create_date' => true,
        'update_date' => true,
        'release_date' => true
    ];
}
