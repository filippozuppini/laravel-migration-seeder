<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        $companies= ['Trenitalia', 'Italo', 'Trenord', 'Treni Alpini' ];
        $stations= ['VERONA PN' , 'MILANO CENTRALE' , 'VENEZIA SMN', 'VENEZIA', 'FIRENZE'];
        $lectersNumbers=['abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'];



        for ($i=0; $i < 15; $i++) { 
            
            $newTrain = new Train();

            $newTrain->company = $faker->randomElements($companies);
            $newTrain->start_station = $faker->randomElements($stations);
            $newTrain->end_station = $faker->randomElements(array_diff($stations, [$train->start_station]));

            $newTrain->leave_time = $faker->dateTimeInInterval('now', '+3 days');
            $newTrain->arrive_time = $faker->dateTimeInInterval('now', '+3 days');
            $newTrain->code = $faker->randomElements($lectersNumbers, 7);
            $newTrain->tot_carriage = $faker->numberBetween(5, 10);
            $newTrain->is_late = $faker->boolean(0.5);
            $newTrain->is_deleted = $faker->boolean(0.5);

            $newTrain-> save();

        }
    }
}
