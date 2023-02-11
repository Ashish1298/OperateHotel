<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts') -> insert([
            'image'=> '202302060936banner3.jpg',
            'description'=>'In hotels the rooms are categorised and priced according to the type of bed, number of occupants, number of bed, decor, specific furnishings or features and nowadays special even the special theme available in the room.

            Later when assigning the guest room before the arrival of the guest the front desk agent must be aware of guest room characteristics for each room type available in the hotel. Also not to forget any guest specific request or room specific request requested by the guest for eg:- room away from the elevator, King bedded room, twin bedroom, non-smoking room etc.',
        ]);
    }
}
