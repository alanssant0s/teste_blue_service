<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RequestProduct Entity
 *
 * @property int $request_id
 * @property int $product_id
 * @property int $qtd
 * @property float $price
 * @property float $total
 *
 * @property \App\Model\Entity\Request $request
 * @property \App\Model\Entity\Product $product
 */
class RequestProduct extends Entity
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
        'price' => true,
        'total' => true,
        'request' => true,
        'request_id' => true,
        'product' => true,
        'product_id' => true,
    ];
}
