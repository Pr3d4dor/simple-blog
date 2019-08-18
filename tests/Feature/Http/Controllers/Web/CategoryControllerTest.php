<?php

namespace Tests\Feature\Http\Controllers\Web;

use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function index_displays_the_category_list()
    {
        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('categories.index'));

        $response->assertStatus(200);
        $response->assertViewIs('categories.index');
    }

    /** @test */
    public function create_displays_the_category_creation_form()
    {
        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('categories.create'));

        $response->assertStatus(200);
        $response->assertViewIs('categories.create');
    }

    /** @test */
    public function show_displays_the_category_info()
    {
        $category = factory(Category::class)->create();

        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('categories.show', $category->id));

        $response->assertStatus(200);
        $response->assertViewIs('categories.show');
    }

    /** @test */
    public function edit_displays_the_category_edit_form()
    {
        $category = factory(Category::class)->create();

        $response = $this
            ->actingAs($this->adminUser)
            ->get(route('categories.edit', $category->id));

        $response->assertStatus(200);
        $response->assertViewIs('categories.edit');
    }

    /** @test */
    public function create_form_displays_validation_errors()
    {
        $response = $this
            ->actingAs($this->adminUser)
            ->post(route('categories.store'));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('color');
    }

    /** @test */
    public function edit_form_displays_validation_errors()
    {
        $category = factory(Category::class)->create();

        $response = $this
            ->actingAs($this->adminUser)
            ->put(route('categories.update', $category->id));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('color');
    }

    /** @test */
    public function it_can_create_category()
    {
        $data = [
            'name' => 'category',
            'color' => '#CD5C5C',
        ];

        $response = $this
            ->actingAs($this->adminUser)
            ->post(route('categories.store'), $data)
            ->assertStatus(302);

        $response->assertRedirect(route('categories.index'));

        $this->assertDatabaseHas('categories', [
            'name' => 'category',
            'color' => '#CD5C5C'
        ]);
    }

    /** @test */
    public function it_can_update_category()
    {
        $category = factory(Category::class)->create();

        $data = [
            'name' => 'Updated category',
            'color' => '#CD5C5C',
        ];

        $response = $this
            ->actingAs($this->adminUser)
            ->put(route('categories.update', $category->id), $data)
            ->assertStatus(302);

        $response->assertRedirect(route('categories.index'));

        $this->assertDatabaseHas('categories', [
            'name' => 'Updated category',
            'color' => '#CD5C5C',
        ]);
    }

    /** @test */
    public function it_can_delete_category()
    {
        $category = factory(Category::class)->create([
            'name' => 'category',
            'color' => '#CD5C5C',
        ]);

        $this
            ->actingAs($this->adminUser)
            ->delete(route('categories.destroy', $category->id))
            ->assertStatus(204);

        $this->assertDatabaseMissing('categories', [
            'name' => 'category',
            'color' => '#CD5C5C',
        ]);
    }
}
