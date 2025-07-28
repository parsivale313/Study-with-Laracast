<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create( [
            'first_name' => 'jon',
            'last_name' => 'way',
            'email' => 'test@example.com',
        ]);
    
        $this->call(JobSeeder::class);

    
    }

}
