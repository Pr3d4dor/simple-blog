@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('helpers.flash-message')
            <div class="card">
                <div class="card-header">
                    Post
                </div>
                <div class="card-body">
                    <p><b>Titulo:</b> {{ $post->title }}</p>
                    <p><b>Corpo:</b> {{ $post->body }}</p>
                    <p><b>Categorias:</b> </p>
                    @if (count($post->categories) > 0)
                        @foreach($post->categories as $category)
                            <p>{{ $category->name }}</p>
                        @endforeach
                    @else
                        <p>Nenhuma</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
