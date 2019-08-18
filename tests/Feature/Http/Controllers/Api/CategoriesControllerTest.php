<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoriesControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_create_category()
    {
        $data = [
            'name' => 'name',
            'color' => '#CD5C5C',
        ];

        $this
            ->actingAs($this->adminUser, 'api')
            ->post(route('api.categories.store'), $data)
            ->assertStatus(201)
            ->assertJson([
                'data' => $data
            ]);
    }

    /** @test */
    public function it_can_update_category()
    {
        $category = factory(Category::class)->create();

        $data = [
            'name' => 'name',
            'color' => '#CD5C5C',
        ];

        $this
            ->actingAs($this->adminUser, 'api')
            ->put(route('api.categories.update', $category->id), $data)
            ->assertStatus(200)
            ->assertJson([
                'data' => $data
            ]);
    }

    /** @test */
    public function it_can_show_category()
    {
        $category = factory(Category::class)->create();

        $this
            ->actingAs($this->adminUser, 'api')
            ->get(route('api.categories.show', $category->id))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_delete_category()
    {
        $category = factory(Category::class)->create();

        $this
            ->actingAs($this->adminUser, 'api')
            ->delete(route('api.categories.destroy', $category->id))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_list_category()
    {
        $categories = factory(Category::class, 2)->create();

        $this
            ->actingAs($this->adminUser, 'api')
            ->get(route('api.categories.index'))
            ->assertStatus(200)
            ->assertJson([
                'data' => $categories->toArray(),
            ]);
    }
}
