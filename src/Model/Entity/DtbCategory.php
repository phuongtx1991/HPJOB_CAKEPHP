<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbCategory Entity
 *
 * @property int $category_id
 * @property string $category_name
 * @property int $parent_category_id
 * @property int $level
 * @property int $rank
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 *
 * @property \App\Model\Entity\ParentCategory $parent_category
 * @property \App\Model\Entity\Creator $creator
 */
class DtbCategory extends Entity
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
        'category_name' => true,
        'parent_category_id' => true,
        'level' => true,
        'rank' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'parent_category' => true,
        'creator' => true
    ];
}
