<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbSendCustomer Entity
 *
 * @property int $customer_id
 * @property int $send_id
 * @property string $email
 * @property string $name
 * @property int $send_flag
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Send $send
 */
class DtbSendCustomer extends Entity
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
        'email' => true,
        'name' => true,
        'send_flag' => true,
        'customer' => true,
        'send' => true
    ];
}
