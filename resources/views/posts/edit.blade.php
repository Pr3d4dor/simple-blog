@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('helpers.flash-message')
            <div class="card">
                <div class="card-header">
                    Editar Post
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->getKey()) }}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="title">Titulo</label>
                        <input id="title" type="text" name="title" class="form-control" value="{{ $post->title }}" />

                        <br>
                        <label for="comment">Corpo: </label>
                        <textarea id="body" name="body" cols="73" rows="10" style="resize: vertical" class="form-control">{{ $post->body }}</textarea>

                        <br>
                        <label for="categories">Categorias: </label>
                        <select id="categories" name="categories[]" multiple class="form-control">
                            @foreach($categories as $category)
                                @if (in_array($category->getKey(), $post->categoriesIds))
                                    <option value="{{ $category->getKey() }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->getKey() }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>

                        <br>
                        <div class="float-right">
                            <button type="submit" class="btn btn-info">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
