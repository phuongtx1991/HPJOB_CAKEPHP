<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbShipmentItem Entity
 *
 * @property int $shipping_id
 * @property int $product_class_id
 * @property int $order_id
 * @property string $product_name
 * @property string $product_code
 * @property string $classcategory_name1
 * @property string $classcategory_name2
 * @property float $price
 * @property float $quantity
 *
 * @property \App\Model\Entity\Shipping $shipping
 * @property \App\Model\Entity\ProductClass $product_class
 * @property \App\Model\Entity\Order $order
 */
class DtbShipmentItem extends Entity
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
        'product_name' => true,
        'product_code' => true,
        'classcategory_name1' => true,
        'classcategory_name2' => true,
        'price' => true,
        'quantity' => true,
        'shipping' => true,
        'product_class' => true,
        'order' => true
    ];
}
