<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbPayment Entity
 *
 * @property int $payment_id
 * @property string $payment_method
 * @property float $charge
 * @property float $rule_max
 * @property int $rank
 * @property string $note
 * @property int $fix
 * @property int $status
 * @property int $del_flg
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property string $payment_image
 * @property float $upper_rule
 * @property int $charge_flg
 * @property float $rule_min
 * @property float $upper_rule_max
 * @property int $module_id
 * @property string $module_path
 * @property string $memo01
 * @property string $memo02
 * @property string $memo03
 * @property string $memo04
 * @property string $memo05
 * @property string $memo06
 * @property string $memo07
 * @property string $memo08
 * @property string $memo09
 * @property string $memo10
 *
 * @property \App\Model\Entity\Creator $creator
 * @property \App\Model\Entity\Module $module
 */
class DtbPayment extends Entity
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
        'payment_method' => true,
        'charge' => true,
        'rule_max' => true,
        'rank' => true,
        'note' => true,
        'fix' => true,
        'status' => true,
        'del_flg' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'payment_image' => true,
        'upper_rule' => true,
        'charge_flg' => true,
        'rule_min' => true,
        'upper_rule_max' => true,
        'module_id' => true,
        'module_path' => true,
        'memo01' => true,
        'memo02' => true,
        'memo03' => true,
        'memo04' => true,
        'memo05' => true,
        'memo06' => true,
        'memo07' => true,
        'memo08' => true,
        'memo09' => true,
        'memo10' => true,
        'creator' => true,
        'module' => true
    ];
}
