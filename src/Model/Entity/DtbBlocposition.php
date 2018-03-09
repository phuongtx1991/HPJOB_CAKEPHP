<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbBlocposition Entity
 *
 * @property int $device_type_id
 * @property int $page_id
 * @property int $target_id
 * @property int $bloc_id
 * @property int $bloc_row
 * @property int $anywhere
 *
 * @property \App\Model\Entity\DeviceType $device_type
 * @property \App\Model\Entity\Page $page
 * @property \App\Model\Entity\Target $target
 * @property \App\Model\Entity\Bloc $bloc
 */
class DtbBlocposition extends Entity
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
        'bloc_row' => true,
        'anywhere' => true,
        'device_type' => true,
        'page' => true,
        'target' => true,
        'bloc' => true
    ];
}
