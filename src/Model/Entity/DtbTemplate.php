<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbTemplate Entity
 *
 * @property string $template_code
 * @property int $device_type_id
 * @property string $template_name
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\DeviceType $device_type
 */
class DtbTemplate extends Entity
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
        'device_type_id' => true,
        'template_name' => true,
        'create_date' => true,
        'update_date' => true,
        'device_type' => true
    ];
}
