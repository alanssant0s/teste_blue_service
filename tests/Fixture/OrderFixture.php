<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderFixture
 */
class OrderFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'order';
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
                'TOTAL' => 1,
                'created' => '2022-08-13 09:30:10',
                'modified' => '2022-08-13 09:30:10',
                'deleted' => '2022-08-13 09:30:10',
            ],
        ];
        parent::init();
    }
}
