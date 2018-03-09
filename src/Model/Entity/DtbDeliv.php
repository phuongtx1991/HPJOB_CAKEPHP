<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbDeliv Entity
 *
 * @property int $deliv_id
 * @property int $product_type_id
 * @property string $name
 * @property string $service_name
 * @property string $remark
 * @property string $confirm_url
 * @property int $rank
 * @property int $status
 * @property int $del_flg
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\ProductType $product_type
 * @property \App\Model\Entity\Creator $creator
 */
class DtbDeliv extends Entity
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
        'product_type_id' => true,
        'name' => true,
        'service_name' => true,
        'remark' => true,
        'confirm_url' => true,
        'rank' => true,
        'status' => true,
        'del_flg' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'product_type' => true,
        'creator' => true
    ];
}
