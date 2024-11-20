<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_listings')->insert([
            ['title' => 'Director', 'salary' => '$50000', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Teacher', 'salary' => '$40000', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Nurse', 'salary' => '$34000', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Programmer', 'salary' => '$30000', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

