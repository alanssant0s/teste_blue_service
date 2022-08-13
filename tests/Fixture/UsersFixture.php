<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'role_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-13 09:28:37',
                'modified' => '2022-08-13 09:28:37',
                'deleted' => '2022-08-13 09:28:37',
            ],
        ];
        parent::init();
    }
}
