<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 40; $i++) {
            $train = new Train();
            $train->agency = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrive_station = $faker->city();
            $train->date = $faker->randomElement(['2024-01-16', '2024-01-21', '2024-01-18', '2024-01-17', '2024-01-24']);
            $train->departure_time = $faker->time();
            $train->arrive_time = $faker->time();
            $train->train_code = $faker->bothify('??####');
            $train->cab_number = $faker->numberBetween(1, 20);
            $train->save();
        }
        
    }
}
