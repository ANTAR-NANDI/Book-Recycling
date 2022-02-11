<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'firstname' => 'Antar',
                'lastname' => 'Nandi',
                'email' => 'antarnandy.2@gmail.com',
                'password' => '12345678',
                'mobile' => '01824506162',
                'reg_date' => Carbon::now(),
                'role'    => 'admin',
                'active' => 1,
                'ispaid' => 1
            ]
        );
        DB::table('users')->insert(
            [
                'firstname' => 'Rimon',
                'lastname' => 'Mohajon',
                'email' => 'rimon@gmail.com',
                'password' => '12345678',
                'mobile' => '01835896311',
                'reg_date' => Carbon::now(),
                'role'    => 'user',
                'active' => 1,
                'ispaid' => 1
            ]
        );
        DB::table('users')->insert(
            [
                'firstname' => 'Bivash Kanti',
                'lastname' => 'Nath',
                'email' => 'bivash@gmail.com',
                'password' => '12345678',
                'mobile' => '01831147334',
                'reg_date' => Carbon::now(),
                'role'    => 'user',
                'active' => 1,
                'ispaid' => 1
            ]
        );
        DB::table('users')->insert(
            [
                'firstname' => 'Rudra Pratap',
                'lastname' => 'Bhowmick',
                'email' => 'rudra@gmail.com',
                'password' => '12345678',
                'mobile' => '01856893041',
                'reg_date' => Carbon::now(),
                'role'    => 'user',
                'active' => 1,
                'ispaid' => 1
            ]
        );
    }
}
