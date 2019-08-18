@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('helpers.flash-message')
            <div class="card">
                <div class="card-header">
                    Criar Categoria
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf

                        <label for="name">Nome</label>
                        <input id="name" type="text" name="name" class="form-control" />

                        <br>
                        <label for="comment">Cor: </label>
                        <input id="color" type="color" name="color" class="form-control" />

                        <br>

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
