<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
    		'name' => 'Admin',
    		'email' => 'admin@example.com',
    		'password' => bcrypt('secret!'),
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);
    }
}