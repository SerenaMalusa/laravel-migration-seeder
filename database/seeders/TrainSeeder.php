<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // seeder for only 1 train
        // $train = new Train;
        // $train->departure_station = 'Roma';
        // $train->arrival_station = 'Milano';
        // $train->departure_time = date('Y-m-d');
        // $train->arrival_time = date('Y-m-d');
        // $train->train_code = 'asd456tre4';
        // $train->coaches = 5;
        // $train->on_time = 0;
        // $train->deleted = 0;
        // $train->restaurant_wagon = 1;
        // $train->save();

        // seeder for an array of trains
        // $records = [
        //     [
        //         'company' => 'Italo',
        //         'departure_station' => 'Milano',
        //         'arrival_station' => 'Roma',
        //         'departure_time' => date('Y-m-d'),
        //         'arrival_time' => date('Y-m-d'),
        //         'train_code' => 'asd456tre4',
        //         'coaches' => 5,
        //         'on_time' => 0,
        //         'deleted' => 1,
        //         'restaurant_wagon' => 1
        //     ],
        //     [
        //         'company' => 'Italo',
        //         'departure_station' => 'Milano',
        //         'arrival_station' => 'Roma',
        //         'departure_time' => date('Y-m-d'),
        //         'arrival_time' => date('Y-m-d'),
        //         'train_code' => 'asd456tre4',
        //         'coaches' => 5,
        //         'on_time' => 0,
        //         'deleted' => 1,
        //         'restaurant_wagon' => 1
        //     ],
        //     [
        //         'company' => 'Italo',
        //         'departure_station' => 'Milano',
        //         'arrival_station' => 'Roma',
        //         'departure_time' => date('Y-m-d'),
        //         'arrival_time' => date('Y-m-d'),
        //         'train_code' => 'asd456tre4',
        //         'coaches' => 5,
        //         'on_time' => 0,
        //         'deleted' => 1,
        //         'restaurant_wagon' => 1
        //     ],
        //     [
        //         'company' => 'Italo',
        //         'departure_station' => 'Milano',
        //         'arrival_station' => 'Roma',
        //         'departure_time' => date('Y-m-d'),
        //         'arrival_time' => date('Y-m-d'),
        //         'train_code' => 'asd456tre4',
        //         'coaches' => 5,
        //         'on_time' => 0,
        //         'deleted' => 1,
        //         'restaurant_wagon' => 1
        //     ]
        // ];
        // foreach ($records as $record) {
        //     $train = new Train;
        //     $train->fill($record);
        //     $train->save();
        // }

        // seeder whith data from Faker 
        //     for ($a = 0; $a < 3; $a++) {
        //         $train = new Train;
        //         $train->company = $faker->company();
        //         $train->departure_station = $faker->city();
        //         $train->arrival_station = $faker->city();
        //         $train->departure_time = $faker->dateTimeBetween('-1 week');
        //         $train->arrival_time = $faker->dateTimeBetween('-1 week');
        //         $train->train_code = '';
        //         for ($i = 0; $i < 10; $i++) {
        //             $train->train_code .= $faker->randomLetter();
        //         }
        //         $train->coaches = $faker->randomDigit();
        //         $train->on_time = $faker->numberBetween(0, 1);
        //         $train->deleted = $faker->numberBetween(0, 1);
        //         $train->restaurant_wagon = $faker->numberBetween(0, 1);
        //         $train->save();
        //     }
        // }

        // seeder with data from a csv file
        $file = fopen(__DIR__ . '/../csv/trains.csv', 'r');
        $is_first_line = true;
        while (!feof($file)) {
            $data = fgetcsv($file);
            if (!$is_first_line) {
                $train = new Train;
                $train->company = $data[0];
                $train->departure_station = $data[1];
                $train->arrival_station = $data[2];
                $train->departure_time = $data[3];
                $train->arrival_time = $data[4];
                $train->train_code = $data[5];
                $train->coaches = $data[6];
                $train->on_time = $data[7];
                $train->deleted = $data[8];
                $train->restaurant_wagon = $data[9];
                $train->save();
            }
            $is_first_line = false;
        }
    }
}
