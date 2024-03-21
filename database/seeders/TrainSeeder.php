<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [
                'company' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_time' => date('Y-m-d'),
                'arrival_time' => date('Y-m-d'),
                'train_code' => 'asd456tre4',
                'coaches' => 5,
                'on_time' => 0,
                'deleted' => 1,
                'restaurant_wagon' => 1
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_time' => date('Y-m-d'),
                'arrival_time' => date('Y-m-d'),
                'train_code' => 'asd456tre4',
                'coaches' => 5,
                'on_time' => 0,
                'deleted' => 1,
                'restaurant_wagon' => 1
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_time' => date('Y-m-d'),
                'arrival_time' => date('Y-m-d'),
                'train_code' => 'asd456tre4',
                'coaches' => 5,
                'on_time' => 0,
                'deleted' => 1,
                'restaurant_wagon' => 1
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_time' => date('Y-m-d'),
                'arrival_time' => date('Y-m-d'),
                'train_code' => 'asd456tre4',
                'coaches' => 5,
                'on_time' => 0,
                'deleted' => 1,
                'restaurant_wagon' => 1
            ]
        ];

        foreach ($records as $record) {
            $train = new Train;
            $train->fill($record);
            $train->save();
        }
    }
}
