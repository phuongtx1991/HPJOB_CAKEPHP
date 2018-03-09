<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbProductCategory Entity
 *
 * @property int $product_id
 * @property int $category_id
 * @property int $rank
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Category $category
 */
class DtbProductCategory extends Entity
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
        'product' => true,
        'category' => true
    ];
}
