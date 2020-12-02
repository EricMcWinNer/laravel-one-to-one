<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            'value' => 'Animal',
        ]);
        DB::table('words')->insert([
            'value' => 'Computer',
        ]);
        DB::table('words')->insert([
            'value' => 'Technology',
        ]);
        DB::table('words')->insert([
            'value' => 'Anime',
        ]);
        DB::table('words')->insert([
            'value' => 'Movie',
        ]);
        DB::table('words')->insert([
            'value' => 'Game',
        ]);
        DB::table('words')->insert([
            'value' => 'Song',
        ]);
        DB::table('words')->insert([
            'value' => 'Story',
        ]);
        DB::table('words')->insert([
            'value' => 'Artist',
        ]);
        DB::table('words')->insert([
            'value' => 'Musician',
        ]);
        DB::table('words')->insert([
            'value' => 'Millionare',
        ]);
        DB::table('words')->insert([
            'value' => 'Genius',
        ]);
        DB::table('words')->insert([
            'value' => 'Color',
        ]);
        DB::table('matches')->insert([
            'value' => 'Lion',
            'word_id' => 1
        ]);
        DB::table('matches')->insert([
            'value' => 'ROG',
            'word_id' => 2
        ]);
        DB::table('matches')->insert([
            'value' => 'Web Development',
            'word_id' => 3
        ]);
        DB::table('matches')->insert([
            'value' => 'Domestic Girlfriend',
            'word_id' => 4
        ]);
        DB::table('matches')->insert([
            'value' => 'Endgame',
            'word_id' => 5
        ]);
        DB::table('matches')->insert([
            'value' => 'Call of Duty',
            'word_id' => 6
        ]);
        DB::table('matches')->insert([
            'value' => 'Treacherous',
            'word_id' => 7
        ]);
        DB::table('matches')->insert([
            'value' => 'Three little pigs',
            'word_id' => 8
        ]);
        DB::table('matches')->insert([
            'value' => 'Michelangelo',
            'word_id' => 9
        ]);
        DB::table('matches')->insert([
            'value' => 'Taylor Swift',
            'word_id' => 10
        ]);
        DB::table('matches')->insert([
            'value' => 'Quincy Jones',
            'word_id' => 11
        ]);
        DB::table('matches')->insert([
            'value' => 'Steve Hawking',
            'word_id' => 12
        ]);
        DB::table('matches')->insert([
            'value' => 'Smaragdine',
            'word_id' => 13
        ]);


    }
}
