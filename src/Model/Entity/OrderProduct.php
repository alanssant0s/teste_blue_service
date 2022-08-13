<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderProduct Entity
 *
 * @property int $order_id
 * @property int $products_id
 * @property int $qtd
 * @property float $unit
 * @property float $total
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Product $product
 */
class OrderProduct extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'qtd' => true,
        'unit' => true,
        'total' => true,
        'order' => true,
        'product' => true,
    ];
}
