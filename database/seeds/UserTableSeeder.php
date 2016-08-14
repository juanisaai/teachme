<?php
/**
 * Created by PhpStorm.
 * User: Isai
 * Date: 12/08/16
 * Time: 12:55 PM
 */


use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

class UserTableSeeder extends Seeder {


    public function run()
    {
        $this->createAdmin();
    }

    private function createAdmin()
    {

        User::create([
            'name' => 'Juan Isai',
            'email' => 'isai@cxz.com',
            'password' => bcrypt('admin')
        ]);

    }

}