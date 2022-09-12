<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\intern;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //\App\Models\User::factory(10)->create();
        
        $user =User::factory()->create([
            'name' => 'John Doe',
            'email' => 'jhon@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user -> id
        ]);
        intern::factory(6)->create([
            'user_id' => $user -> id
        ]);
    }
}
