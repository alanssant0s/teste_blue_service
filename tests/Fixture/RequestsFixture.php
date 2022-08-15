<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequestsFixture
 */
class RequestsFixture extends TestFixture
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
                'id' => 1,
                'user_id' => 1,
                'total' => 1,
                'created' => '2022-08-15 00:31:22',
                'modified' => '2022-08-15 00:31:22',
                'deleted' => '2022-08-15 00:31:22',
            ],
        ];
        parent::init();
    }
}
