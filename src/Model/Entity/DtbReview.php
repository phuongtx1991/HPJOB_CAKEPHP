<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbReview Entity
 *
 * @property int $review_id
 * @property int $product_id
 * @property string $reviewer_name
 * @property string $reviewer_url
 * @property int $sex
 * @property int $customer_id
 * @property int $recommend_level
 * @property string $title
 * @property string $comment
 * @property int $status
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Creator $creator
 */
class DtbReview extends Entity
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
        'product_id' => true,
        'reviewer_name' => true,
        'reviewer_url' => true,
        'sex' => true,
        'customer_id' => true,
        'recommend_level' => true,
        'title' => true,
        'comment' => true,
        'status' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'product' => true,
        'customer' => true,
        'creator' => true
    ];
}
