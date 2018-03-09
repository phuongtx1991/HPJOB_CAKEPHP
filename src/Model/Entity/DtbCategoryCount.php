<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbCategoryCount Entity
 *
 * @property int $category_id
 * @property int $product_count
 * @property \Cake\I18n\FrozenTime $create_date
 */
class DtbCategoryCount extends Entity
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
        'product_count' => true,
        'create_date' => true
    ];
}
