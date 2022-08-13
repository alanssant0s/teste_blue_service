<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductFeature Entity
 *
 * @property int $producty_id
 * @property int $feature_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Feature $feature
 */
class ProductFeature extends Entity
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
        'product' => true,
        'feature' => true,
    ];
}
