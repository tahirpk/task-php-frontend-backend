<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 1 ; $i <= 20 ; $i++){
	        $faker = Faker::create('App\Models\User');
	        DB::table('users')->insert([
                'first_name' => $faker->firstNameMale(),
                'last_name' => $faker->firstNameMale(),
	        	'name' => $faker->firstNameMale(),
	        	'email' => $faker->unique()->safeEmail,
	        	'phone' => $faker->phoneNumber(),
                'job_title' => 1,
                'dob' => date('Y-m-d'),
                'is_admin' => ($i==1)?'1':'0',
                'password' => Hash::make('password'),
	        	'created_at' => \Carbon\Carbon::now(),
	        	'Updated_at' => \Carbon\Carbon::now(),
	        ]);
	    }

    }
}
