<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'id' => 1,
                'title' => 'Event Management',
                'description' => 'Event Management Service',
                'icon' => 'icon-event',
                'timeline' => '2025',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'title' => 'Manpower Services',
                'description' => 'Manpower Services',
                'icon' => 'icon-manpower',
                'timeline' => '2025',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'title' => 'Consultancy',
                'description' => 'Consultancy Service',
                'icon' => 'icon-consultancy',
                'timeline' => '2025',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'title' => 'Other',
                'description' => 'Other Service',
                'icon' => 'icon-other',
                'timeline' => '2025',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
