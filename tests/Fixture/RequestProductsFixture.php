<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequestProductsFixture
 */
class RequestProductsFixture extends TestFixture
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
                'request_id' => 1,
                'product_id' => 1,
                'qtd' => 1,
                'price' => 1,
                'total' => 1,
            ],
        ];
        parent::init();
    }
}
