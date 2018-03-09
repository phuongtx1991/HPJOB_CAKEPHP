<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbRecommendProduct Entity
 *
 * @property int $product_id
 * @property int $recommend_product_id
 * @property int $rank
 * @property string $comment
 * @property int $status
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\RecommendProduct $recommend_product
 * @property \App\Model\Entity\Creator $creator
 */
class DtbRecommendProduct extends Entity
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
        'rank' => true,
        'comment' => true,
        'status' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'product' => true,
        'recommend_product' => true,
        'creator' => true
    ];
}
