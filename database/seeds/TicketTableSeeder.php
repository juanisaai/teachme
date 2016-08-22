<?php


use database\seeds\BaseSeeder;
use Faker\Generator;
use TeachMe\Entities\ticket;

class TicketTableSeeder extends BaseSeeder
{

    public function getModel()
    {
        return new ticket();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'title'   => $faker->sentence(),
            'status'  => $faker->randomElement(['open', 'open', 'closed']),
            'user_id' => 1
        ];
    }

    public function run()
    {
        $this->createMultiple(50);
    }
}