<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '1',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '2',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '3',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '4',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '5',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '6',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '7',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
        DB::table('books')->insert(
            [
                'name' => 'Antar',
                'image' => 'Nandi',
                'price' => 120,
                'user_id' => '2',
                'cat_id' => '8',
                'date' => Carbon::now(),
                'type'    => 'exchange',
                'description' => 'test',
                'issold' => 1,
            ]
        );
    }
}
