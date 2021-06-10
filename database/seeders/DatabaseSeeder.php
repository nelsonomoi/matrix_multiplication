<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Tester',
            'email' => 'tester@gmail.com',
            'password' => bcrypt('abcd1234'),
        ]);
    }
}
