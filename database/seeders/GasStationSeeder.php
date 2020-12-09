<?php

namespace Database\Seeders;

use App\Models\GasStation;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GasStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Generate Gas Station Data 
        GasStation::factory()
            ->count(4)
            ->create();
        
        // after that get all the gas station data  
        $station = GasStation::all();
        // itarate each data
        $station->each(function($data){
            // and seed/ persist data on table
            Product::factory()->create([
                'station_id' => $data['id'],
            ]);
        });
    }
}
