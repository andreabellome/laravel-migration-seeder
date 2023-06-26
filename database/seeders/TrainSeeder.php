<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i=0; $i < 100; $i++ ){
            
            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->randomElement(['Roma', 'Milano', 'Napoli']);
            $train->arrival_station = $faker->randomElemen(['Palermo', 'Rimini', 'Genova']);
            $train->departure_time = $faker->dateTimeBetween('-1 day','+1 day');
            $train->arrival_time = $faker->dateTimeBetween('-2 day','+2 day');
            $train->train_code = 'AB'.$faker->randomDigit();
            $train->train_code = $faker->randomDigit();
            $train->on_time = $faker->boolean(70);
            $train->cancelled = $faker->randomDigit(20);

            $train->save();
        }
    }
}
