<?php
/**
 * Created by PhpStorm.
 * User: Isai
 * Date: 12/08/16
 * Time: 12:55 PM
 */


use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {


    public function run()
    {
        $this->createAdmin();

        $this->createUsers(50);

    }

    private function createAdmin()
    {

        User::create([
            'name' => 'Juan Isai',
            'email' => 'isai@cxz.com',
            'type' => 'Admin',
            'password' => bcrypt('admin')
        ]);

    }

    public function createUsers($total)
    {
        $faker = Faker::create();

        for ($i = 0; $i < $total; $i++) {

            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'type' => 'User',
                'password' => bcrypt('secret')
            ]);

        }
    }

}