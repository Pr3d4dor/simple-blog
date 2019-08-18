<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        return new PostCollection(Post::paginate($this->itemsPerPage));
    }

    public function store(StorePostRequest $request)
    {
        try {
            $post = Post::create([
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'user_id' => $request->user()->getKey(),
            ]);
            $post->categories()->sync($request->get('categories'));

            return (new PostResource($post))
                ->response()
                ->setStatusCode(201);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);

        return new PostResource($post);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        try {
            $post = Post::create([
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'user_id' => $request->user()->getKey(),
            ]);
            $post->categories()->sync($request->get('categories'));

            return new PostResource($post);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        try {
            $post->delete();

            return new PostResource($post);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
