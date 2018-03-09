<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbDelivfee Entity
 *
 * @property int $deliv_id
 * @property int $fee_id
 * @property int $pref
 *
 * @property \App\Model\Entity\Fee $fee
 * @property \App\Model\Entity\Deliv $deliv
 */
class DtbDelivfee extends Entity
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
        'fee' => true,
        'pref' => true,
        'deliv' => true
    ];
}
