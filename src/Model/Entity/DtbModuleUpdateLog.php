<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbModuleUpdateLog Entity
 *
 * @property int $log_id
 * @property int $module_id
 * @property string $buckup_path
 * @property int $error_flg
 * @property string $error
 * @property string $ok
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\Module $module
 */
class DtbModuleUpdateLog extends Entity
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
        'module_id' => true,
        'buckup_path' => true,
        'error_flg' => true,
        'error' => true,
        'ok' => true,
        'create_date' => true,
        'update_date' => true,
        'module' => true
    ];
}
