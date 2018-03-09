<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbOtherDeliv Entity
 *
 * @property int $other_deliv_id
 * @property int $customer_id
 * @property string $name01
 * @property string $name02
 * @property string $kana01
 * @property string $kana02
 * @property string $company_name
 * @property string $zip01
 * @property string $zip02
 * @property string $zipcode
 * @property int $country_id
 * @property int $pref
 * @property string $addr01
 * @property string $addr02
 * @property string $tel01
 * @property string $tel02
 * @property string $tel03
 * @property string $fax01
 * @property string $fax02
 * @property string $fax03
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Country $country
 */
class DtbOtherDeliv extends Entity
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
        'customer_id' => true,
        'name01' => true,
        'name02' => true,
        'kana01' => true,
        'kana02' => true,
        'company_name' => true,
        'zip01' => true,
        'zip02' => true,
        'zipcode' => true,
        'country_id' => true,
        'pref' => true,
        'addr01' => true,
        'addr02' => true,
        'tel01' => true,
        'tel02' => true,
        'tel03' => true,
        'fax01' => true,
        'fax02' => true,
        'fax03' => true,
        'customer' => true,
        'country' => true
    ];
}
