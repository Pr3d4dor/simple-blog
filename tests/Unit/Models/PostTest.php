<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_return_the_associated_post_categories_ids_in_array_form()
    {
        factory(Category::class, 3)->create();

        $post = factory(Post::class)->create();

        $post->categories()->sync([1, 2, 3]);

        $this->assertEquals([1, 2, 3], $post->categoriesIds);
    }
}
