<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbTaxRule Entity
 *
 * @property int $tax_rule_id
 * @property int $country_id
 * @property int $pref_id
 * @property int $product_id
 * @property int $product_class_id
 * @property int $calc_rule
 * @property float $tax_rate
 * @property float $tax_adjust
 * @property \Cake\I18n\FrozenTime $apply_date
 * @property int $member_id
 * @property int $del_flg
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Pref $pref
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\ProductClass $product_class
 * @property \App\Model\Entity\Member $member
 */
class DtbTaxRule extends Entity
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
        'country_id' => true,
        'pref_id' => true,
        'product_id' => true,
        'product_class_id' => true,
        'calc_rule' => true,
        'tax_rate' => true,
        'tax_adjust' => true,
        'apply_date' => true,
        'member_id' => true,
        'del_flg' => true,
        'create_date' => true,
        'update_date' => true,
        'country' => true,
        'pref' => true,
        'product' => true,
        'product_class' => true,
        'member' => true
    ];
}
