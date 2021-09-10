<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    private $client;
    private $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = Client::factory()->create([
            'name' => 'Acme Inc'
        ]);

        $this->user = User::factory()->create([
            'email' => 'user@project-x.text',
            'client_id' => $this->client->id,
        ]);
    }

    public function test_homepage_is_projected()
    {
        $response = $this->get('/');

        $response->assertStatus(401);
    }
    
    public function test_homepage_is_rendered()
    {
        $response = $this->withBasicAuth($this->user)
            ->get('/');

        $response->assertStatus(200)
            ->assertSee('Question 1');
    }
}
