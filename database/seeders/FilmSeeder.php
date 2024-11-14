<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create(['title' => 'Purple Hearts', 'genre' => 'Romance']);
        Film::create(['title' => 'Suicide Squad', 'genre' => 'Sci-Fi']);
        Film::create(['title' => 'Harry Potter and the Philosophers Stone', 'genre' => 'Fantasy']);
        Film::create(['title' => 'Train to Busan', 'genre' => 'Horror']);
        Film::create(['title' => 'Exhuma', 'genre' => 'Horror']);
    }
}
