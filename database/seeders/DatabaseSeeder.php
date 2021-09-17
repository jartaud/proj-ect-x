<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\LocationSeeder;

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

        $this->call(LocationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ItemSeeder::class);
    }
}
