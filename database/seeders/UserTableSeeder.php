<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
                'role'    => 'admin',
                'active' => 1,
                'ispaid' => 1
            ]
        );
    }
}
