<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Question2Test extends TestCase
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

    public function test_question_2_is_projected()
    {
        $response = $this->get(route('question-2'));

        $response->assertStatus(401);
    }
    
    public function test_question_2_is_rendered()
    {
        User::factory()->create([
            'name' => 'The Brain',
            'client_id' => $this->client->id,
        ]);

        $response = $this->withBasicAuth($this->user)
            ->get(route('question-2'));

        $response->assertStatus(200)
            ->assertSee('Question 2')
            ->assertSee('Using raw query (stdClass)')
            ->assertSee('Using collecction')
            ->assertSee('The Brain')
            ;
    }
}
