<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('stats')->insert([
            'view_count' => 0,
            'request_count' => 0
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
