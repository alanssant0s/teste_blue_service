<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CartsFixture
 */
class CartsFixture extends TestFixture
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
                'user_id' => 1,
                'product_id' => 1,
                'qtd' => 1,
                'price' => 1,
                'TOTAL' => 1,
            ],
        ];
        parent::init();
    }
}
