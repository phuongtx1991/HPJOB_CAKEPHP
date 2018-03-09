<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbBestProduct Entity
 *
 * @property int $best_id
 * @property int $category_id
 * @property int $rank
 * @property int $product_id
 * @property string $title
 * @property string $comment
 * @property string $comment_vn
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Creator $creator
 */
class DtbBestProduct extends Entity
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
        'category_id' => true,
        'rank' => true,
        'product_id' => true,
        'title' => true,
        'comment' => true,
        'comment_vn' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'category' => true,
        'product' => true,
        'creator' => true
    ];
}
