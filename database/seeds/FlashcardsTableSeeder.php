<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FlashcardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        $admin = \App\User::where('name', '=', 'Admin')->first();
        
        DB::table('flashcards')->insert([
            'term' => 'Test',
            'definition' => 'a procedure intended to establish the quality, performance, or reliability of something, especially before it is taken into widespread use.',
            'creator_id' => $admin->id,
            'created_at' => Carbon::now()
        ]);
    }
}
