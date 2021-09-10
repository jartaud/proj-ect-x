<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
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
        Client::factory(5)
            ->has(User::factory()->count(5), 'users')
            ->create();

        User::factory()->create([
            'email' => 'test@project-x.test',
            'password' => '$2y$10$.3A8KllTK0MBwxuWHD1ICuRrI4uLQJUDJtgJXG4hOgrKW41udZ20W', //4dd0izfD9IYpLPIO
            'client_id' => 1,
        ]);
    }
}
