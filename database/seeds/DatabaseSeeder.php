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
        // $this->call(UsersTableSeeder::class);
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);
               
        DB::table('roles')->insert([
            'name' => 'familly',
        ]);

        DB::table('roles')->insert([
            'name' => 'pro',
        ]);

    		DB::table('users')->insert([
    			'name' => 'Admin',
    			'password' => bcrypt('tartanpion'), 
    			'email' => 'admin@admin.com',
    		]);
    }
}
