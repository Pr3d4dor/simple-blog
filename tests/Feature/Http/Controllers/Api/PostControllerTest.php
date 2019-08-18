<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_create_post()
    {
        $data = [
            'title' => 'Title',
            'body' => 'Body',
        ];

        $this
            ->actingAs($this->adminUser, 'api')
            ->post(route('api.posts.store'), $data)
            ->assertStatus(201)
            ->assertJson([
                'data' => $data
            ]);
    }

    /** @test */
    public function it_can_update_post()
    {
        $post = factory(Post::class)->create();

        $data = [
            'title' => 'Title',
            'body' => 'Body',
        ];

        $this
            ->actingAs($this->adminUser, 'api')
            ->put(route('api.posts.update', $post->id), $data)
            ->assertStatus(200)
            ->assertJson([
                'data' => $data
            ]);
    }

    /** @test */
    public function it_can_show_post()
    {
        $post = factory(Post::class)->create();

        $this
            ->actingAs($this->adminUser, 'api')
            ->get(route('api.posts.show', $post->id))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_delete_post()
    {
        $post = factory(Post::class)->create();

        $this
            ->actingAs($this->adminUser, 'api')
            ->delete(route('api.posts.destroy', $post->id))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_list_posts()
    {
        $posts = factory(Post::class, 2)->create();

        $this
            ->actingAs($this->adminUser, 'api')
            ->get(route('api.posts.index'))
            ->assertStatus(200)
            ->assertJson([
                'data' => $posts->toArray(),
            ]);
    }
}
