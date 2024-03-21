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
        $train = new Train;
        $train->departure_station = 'Roma';
        $train->arrival_station = 'Milano';
        $train->departure_time = date('Y-m-d');
        $train->arrival_time = date('Y-m-d');
        $train->train_code = 'asd456tre4';
        $train->coaches = 5;
        $train->on_time = 0;
        $train->deleted = 0;
        $train->restaurant_wagon = 1;
        $train->save();
    }
}
