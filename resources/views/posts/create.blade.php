@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('helpers.flash-message')
            <div class="card">
                <div class="card-header">
                    Criar Post
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf

                        <label for="title">Titulo</label>
                        <input id="title" type="text" name="title" class="form-control" />

                        <br>
                        <label for="comment">Corpo: </label>
                        <textarea id="body" name="body" cols="73" rows="10" style="resize: vertical" class="form-control"></textarea>

                        <br>
                        <label for="categories">Categorias: </label>
                        <select id="categories" name="categories[]" multiple class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->getKey() }}">{{ $category->name }}</option>
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
