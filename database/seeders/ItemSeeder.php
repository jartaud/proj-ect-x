<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $widgetsPrice = collect([100.00, 45, 20, 60]);

        // Location 1, widgets
        Item::factory()->create([
            'price' => $widgetsPrice->random(),
            'location_id' => 1,
            'category_id' => 3,
        ]);

        // Location 1, Chevrolet
        Item::factory()->create([
            'name' => 'Impala',
            'price' => 31620,
            'location_id' => 1,
            'category_id' => 4,
            'parent_category_id' => 1,
        ]);
        Item::factory()->create([
            'name' => 'Silverado 4500',
            'price' => 47627,
            'location_id' => 1,
            'category_id' => 4,
            'parent_category_id' => 1,
        ]);

        // Nissan
        Item::factory()->create([
            'name' => 'Versa',
            'price' => 14980,
            'location_id' => 1,
            'category_id' => 5,
            'parent_category_id' => 1,
        ]);
        Item::factory()->create([
            'name' => 'Maxima',
            'price' => 37090,
            'location_id' => 1,
            'category_id' => 5,
            'parent_category_id' => 1,
        ]);
        Item::factory()->create([
            'name' => 'Rogue Sport',
            'price' => 24160,
            'location_id' => 1,
            'category_id' => 5,
            'parent_category_id' => 1,
        ]);

        // Location 1, widgets
        Item::factory()->create([
            'price' => $widgetsPrice->random(),
            'location_id' => 2,
            'category_id' => 3,
        ]);

        // Location 2, Chevrolet
        Item::factory()->create([
            'name' => 'Sonic',
            'price' => 16720,
            'location_id' => 2,
            'category_id' => 4,
            'parent_category_id' => 1,
        ]);

        // Nissan
        Item::factory()->create([
            'name' => 'Murano',
            'price' => 32820,
            'location_id' => 2,
            'category_id' => 5,
            'parent_category_id' => 1,
        ]);
        Item::factory()->create([
            'name' => 'Armada',
            'price' => 48900,
            'location_id' => 2,
            'category_id' => 5,
            'parent_category_id' => 1,
        ]);

        // Purses
        Item::factory()->create([
            'name' => 'Auth Louis Vuitton Monogram',
            'price' => 4500,
            'location_id' => 2,
            'category_id' => 6,
            'parent_category_id' => 2,
        ]);
    }
}
