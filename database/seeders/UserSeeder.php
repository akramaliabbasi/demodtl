<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::factory()->create([
            'name' => 'Akram Abbasi',
            'email' => 'akramabbasi@gmail.com',
            'password' => bcrypt('admin321')
        ]);
		
    }
	
	  
}
