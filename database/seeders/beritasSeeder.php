<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class beritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
            'title' => fake()->title(),
            'description' => fake()->paragraph(2, true),   
            'category' => fake()->sentence(),
            'author' => fake()->email(),
        ]);
    }
}
