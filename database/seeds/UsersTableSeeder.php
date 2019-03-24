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
       //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3 users/author
        DB::table('users')->insert([
        [

        'name' => "Innocent HRDAC",
	    'email'=> "innocent@test.com",
        'password'=> bcrypt('secret')
        
        ],

        [

            'name' => "Bolaji HRDAC",
            'email'=> "bolaji@test.com",
            'password'=> bcrypt('secret')
            
        ],

        [

            'name' => "Kunle HRDAC",
            'email'=> "kunle@test.com",
            'password'=> bcrypt('secret')
            
        ],
]);
    }
}
