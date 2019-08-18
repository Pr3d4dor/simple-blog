@extends('layouts.app')

@section('css')
<style>
    .color-box {
        width: 10px;
        height: 10px;
        display: inline-block;
        background-color: #ccc;
        position: center;
        left: 5px;
        top: 5px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('helpers.flash-message')
            <div class="card">
                <div class="card-header">
                    Categoria
                </div>
                <div class="card-body">
                    <p><b>Nome:</b> {{ $category->name }}</p>
                    <p>
                        <b>Cor:</b>
                        <span class="color-box" style="background-color: {{ $category->color }};"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
