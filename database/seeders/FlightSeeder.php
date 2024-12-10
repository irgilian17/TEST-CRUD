<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            [
                'flight_number' => 'GA123',
                'airline' => 'Garuda Indonesia',
                'origin' => 'CGK',
                'destination' => 'DPS',
                'departure_time' => '2024-08-01 09:30:00',
                'arrival_time' => '2024-08-01 12:30:00',
            ],
            [
                'flight_number' => 'SQ456',
                'airline' => 'Singapore Airlines',
                'origin' => 'SIN',
                'destination' => 'CGK',
                'departure_time' => '2024-08-01 14:00:00',
                'arrival_time' => '2024-08-01 16:30:00',
            ],
            // Add more data...
        ]);
    }
}
