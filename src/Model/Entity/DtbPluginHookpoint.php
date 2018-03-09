<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbPluginHookpoint Entity
 *
 * @property int $plugin_hookpoint_id
 * @property int $plugin_id
 * @property string $hook_point
 * @property string $callback
 * @property int $use_flg
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\Plugin $plugin
 */
class DtbPluginHookpoint extends Entity
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
        'plugin_id' => true,
        'hook_point' => true,
        'callback' => true,
        'use_flg' => true,
        'create_date' => true,
        'update_date' => true,
        'plugin' => true
    ];
}
