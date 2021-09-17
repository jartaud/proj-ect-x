<?php

namespace Tests\Feature\Frumbledingle;

use App\Models\Category;
use Tests\TestCase;
use App\Models\Item;
use App\Models\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_page_is_rendered()
    {
        $this->get(route('frumbledingle.categories'))
            ->assertOk()
            ->assertSee('categories-table');
    }

    public function test_correct_data_is_loaded()
    {
        Category::factory(2)->create();

        $this->get(route('frumbledingle.categories'))
            ->assertViewIs('frumbledingle.categories')
            ->assertViewHas(['categories']);

        $this->json('GET', route('categories.index'))
            ->assertJson([
                'total' => 2,
                'current_page' => 1,
                'per_page' => 10,
                'from' => 1,
                'to' => 2,
                'last_page' => 1
            ])
            ->assertJsonCount(2, 'data')
            ->assertStatus(200);
    }
    
    public function test_it_saves_a_new_category_into_db()
    {
        $parent = Category::factory()->create();

        $this->json('POST', route('categories.store'), [
            'name' => 'The New Category',
            'parent_id' => $parent->id,
        ])
        ->assertStatus(201)
        ->assertJsonFragment(['parent_id' => $parent->id]);

        $this->assertDatabaseHas('categories', ['name' => 'The New Category']);
    }

    public function test_it_validates_the_payload()
    {
        $this->json('POST', route('categories.store'), [
            'name' => ''
        ])
        ->assertJsonValidationErrors('name');
        
        // min 3
        $this->json('POST', route('categories.store'), [
            'name' => 'aa'
        ])
        ->assertJsonValidationErrors('name');
        
        // max 255
        $this->json('POST', route('categories.store'), [
            'name' => str_repeat('Z', 256)
        ])
        ->assertJsonValidationErrors('name');
         
        //parent id
        $this->json('POST', route('categories.store'), [
            'parent_id' => ''
        ])
        ->assertJsonMissing(['parent_id']);

        $this->json('POST', route('categories.store'), [
            'parent_id' => 'xx'
        ])
        ->assertJsonValidationErrors(['parent_id']);
    }

    public function test_it_validates_price()
    {
        $this->json('POST', route('items.store'), [
            'price' => ''
        ])
        ->assertJsonValidationErrors('price');
        
        // min 3
        $this->json('POST', route('items.store'), [
            'price' => 'xx'
        ])
        ->assertJsonValidationErrors('price');
    }

    public function test_it_validates_category_id()
    {
        $this->json('POST', route('items.store'), [
            'category_id' => ''
        ])
        ->assertJsonValidationErrors('category_id');
        
        // min 3
        $this->json('POST', route('items.store'), [
            'category_id' => 'xx'
        ])
        ->assertJsonValidationErrors('category_id');
    }

    public function test_it_validates_location_id()
    {
        $this->json('POST', route('items.store'), [
            'location_id' => ''
        ])
        ->assertJsonValidationErrors('location_id');
        
        // min 3
        $this->json('POST', route('items.store'), [
            'location_id' => 'xx'
        ])
        ->assertJsonValidationErrors('location_id');
    }

    public function test_it_deletes_an_item()
    {
        $item = Item::factory()->create([
            'location_id' => Location::factory()->create()->id,
            'category_id' => Category::factory()->create()->id,
            'name' => 'The New Item'
        ]);

        $this->json('POST', route('items.destroy', $item->id), [
            '_method' => 'DELETE'
        ])
        ->assertStatus(200);

        $this->assertNotNull($item->fresh()->deleted_at);
    }
}
