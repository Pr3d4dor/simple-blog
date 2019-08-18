<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Exception;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::paginate($this->itemsPerPage),
        ]);
    }

    public function create()
    {
        $this->authorize('create', Category::class);

        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->authorize('create', Category::class);

        try {
            Category::create($request->all());

            return redirect()->route('categories.index')->with([
                'alert-success' => 'Categoria criada com sucesso!'
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'alert-danger' => 'Falha ao criar categoria!'
            ]);
        }
    }

    public function show(Category $category)
    {
        return view('categories.show', [
            'category' => $category
        ]);
    }

    public function edit(Category $category)
    {
        $this->authorize('update', $category);

        return view('categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->authorize('update', $category);

        try {
            $category->update($request->all());

            return redirect()->route('categories.index')->with([
                'alert-success' => 'Categoria atualizada com sucesso!'
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'alert-danger' => 'Falha ao atualizar categoria!'
            ]);
        }
    }

    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        try {
            $category->delete();

            return response()->noContent();
        } catch (Exception $e) {
            return redirect()->back()->with([
                'alert-danger' => 'Falha ao excluir categoria!'
            ]);
        }
    }
}
