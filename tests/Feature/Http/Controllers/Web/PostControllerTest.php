<?php

namespace Tests\Feature\Http\Controllers\Web;

use App\Models\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function index_displays_the_post_list()
    {
        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('posts.index'));

        $response->assertStatus(200);
        $response->assertViewIs('posts.index');
    }

    /** @test */
    public function create_displays_the_post_creation_form()
    {
        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('posts.create'));

        $response->assertStatus(200);
        $response->assertViewIs('posts.create');
    }

    /** @test */
    public function show_displays_the_post_info()
    {
        $post = factory(Post::class)->create();

        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('posts.show', $post->id));

        $response->assertStatus(200);
        $response->assertViewIs('posts.show');
    }

    /** @test */
    public function edit_displays_the_post_edit_form()
    {
        $post = factory(Post::class)->create();

        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('posts.edit', $post->id));

        $response->assertStatus(200);
        $response->assertViewIs('posts.edit');
    }

    /** @test */
    public function create_form_displays_validation_errors()
    {
        $response = $this
            ->actingAs($this->adminUser)
            ->post(route('posts.store'));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('body');
        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function edit_form_displays_validation_errors()
    {
        $post = factory(Post::class)->create();

        $response = $this
            ->actingAs($this->adminUser)
            ->put(route('posts.update', $post->id));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('body');
        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function it_can_create_post()
    {
        $data = [
            'title' => 'Title',
            'body' => 'Body',
        ];

        $response = $this
            ->actingAs($this->adminUser)
            ->post(route('posts.store'), $data)
            ->assertStatus(302);

        $response->assertRedirect(route('posts.index'));

        $this->assertDatabaseHas('posts', [
            'title' => 'Title',
            'body' => 'Body'
        ]);
    }

    /** @test */
    public function it_can_update_post()
    {
        $post = factory(Post::class)->create();

        $data = [
            'title' => 'Updated Title',
            'body' => 'Updated Body',
        ];

        $response = $this
            ->actingAs($this->adminUser)
            ->put(route('posts.update', $post->id), $data)
            ->assertStatus(302);

        $response->assertRedirect(route('posts.index'));

        $this->assertDatabaseHas('posts', [
            'title' => 'Updated Title',
            'body' => 'Updated Body'
        ]);
    }

    /** @test */
    public function it_can_delete_post()
    {
        $post = factory(Post::class)->create([
            'title' => 'Title',
            'body' => 'Body',
        ]);

        $this
            ->actingAs($this->adminUser)
            ->delete(route('posts.destroy', $post->id))
            ->assertStatus(204);

        $this->assertDatabaseMissing('posts', [
            'title' => 'Title',
            'body' => 'Body',
        ]);
    }
}
