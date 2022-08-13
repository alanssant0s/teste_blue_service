<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderProductsFixture
 */
class OrderProductsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'order_id' => 1,
                'products_id' => 1,
                'qtd' => 1,
                'unit' => 1,
                'total' => 1,
            ],
        ];
        parent::init();
    }
}
