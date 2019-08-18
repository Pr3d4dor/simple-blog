<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Exception;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('posts.index', [
            'posts' => $request->user()->posts()->with('categories')->paginate($this->itemsPerPage)
        ]);
    }

    public function create()
    {
        return view('posts.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(StorePostRequest $request)
    {
        try {
            Post::create([
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'user_id' => $request->user()->getKey(),
            ])
                ->categories()
                ->sync($request->get('categories'));

            return redirect()->route('posts.index')->with([
                'alert-success' => 'Post criado com sucesso!'
            ]);
        } catch(Exception $e) {
            return redirect()->back()->with([
                'alert-danger' => 'Falha ao criar post!'
            ]);
        }
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        try {
            $post->update([
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'user_id' => $request->user()->getKey(),
            ]);
            $post->categories()->sync($request->get('categories'));

            return redirect()->route('posts.index')->with([
                'alert-success' => 'Post atualizado com sucesso!'
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'alert-danger' => 'Falha ao atualizar post!'
            ]);
        }
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        try {
            $post->delete();

            return response()->noContent();
        } catch (Exception $e) {
            return redirect()->back()->with([
                'alert-danger' => 'Falha ao excluir post!'
            ]);
        }
    }
}
