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
    	DB::table('roles')->insert(
        	[
        		[
	        		'name' => 'Administrateur',
	        		'slug' => 'admin'
	        	],
	        	[
	        		'name' => 'Family',
	        		'slug' => 'fam'
	        	]
        	]
        );

        DB::table('role_user')->insert(
        	[
        		'user_id' => 1,
        		'role_id' => 1
        	]
        );
    }
}
