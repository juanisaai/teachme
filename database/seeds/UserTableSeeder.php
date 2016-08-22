<?php
/**
 * Created by PhpStorm.
 * User: Isai
 * Date: 12/08/16
 * Time: 12:55 PM
 */


use database\seeds\BaseSeeder;
use Faker\Generator;
use TeachMe\Entities\User;

use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'type' => 'User',
            'password' => bcrypt('secret')
        ];
    }


    public function run()
    {
        $this->createAdmin();

        $this->createMultiple(50);

    }

    private function createAdmin()
    {

        $this->create([
            'name' => 'Juan Isai',
            'email' => 'isai@cxz.com',
            'type' => 'Admin',
            'password' => bcrypt('admin')
        ]);

    }

}

