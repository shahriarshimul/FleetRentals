<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // You can adjust this logic based on your needs
        DB::table('feedback')->insert([
            'user_id' => 1,
            'message' => 'This is a sample feedback.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed data as needed
    }
}
