<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbShipping Entity
 *
 * @property int $shipping_id
 * @property int $order_id
 * @property string $shipping_name01
 * @property string $shipping_name02
 * @property string $shipping_kana01
 * @property string $shipping_kana02
 * @property string $shipping_company_name
 * @property string $shipping_tel01
 * @property string $shipping_tel02
 * @property string $shipping_tel03
 * @property string $shipping_fax01
 * @property string $shipping_fax02
 * @property string $shipping_fax03
 * @property int $shipping_country_id
 * @property int $shipping_pref
 * @property string $shipping_zip01
 * @property string $shipping_zip02
 * @property string $shipping_zipcode
 * @property string $shipping_addr01
 * @property string $shipping_addr02
 * @property int $time_id
 * @property string $shipping_time
 * @property \Cake\I18n\FrozenTime $shipping_date
 * @property \Cake\I18n\FrozenTime $shipping_commit_date
 * @property int $rank
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 *
 * @property \App\Model\Entity\Shipping $shipping
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\ShippingCountry $shipping_country
 * @property \App\Model\Entity\Time $time
 */
class DtbShipping extends Entity
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
        'shipping_name01' => true,
        'shipping_name02' => true,
        'shipping_kana01' => true,
        'shipping_kana02' => true,
        'shipping_company_name' => true,
        'shipping_tel01' => true,
        'shipping_tel02' => true,
        'shipping_tel03' => true,
        'shipping_fax01' => true,
        'shipping_fax02' => true,
        'shipping_fax03' => true,
        'shipping_country_id' => true,
        'shipping_pref' => true,
        'shipping_zip01' => true,
        'shipping_zip02' => true,
        'shipping_zipcode' => true,
        'shipping_addr01' => true,
        'shipping_addr02' => true,
        'time_id' => true,
        'shipping_time' => true,
        'shipping_date' => true,
        'shipping_commit_date' => true,
        'rank' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'shipping' => true,
        'order' => true,
        'shipping_country' => true,
        'time' => true
    ];
}
