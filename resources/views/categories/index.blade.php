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
                    <span>Categorias</span>
                    @can('create', App\Models\Category::class))
                        <div class="float-right">
                            <a href="{{ route('categories.create') }}" class="btn-primary btn-sm">Nova Categoria</a>
                        </div>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-responsive text-center" style="display: table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Cor</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td style="width: 40%">
                                    {{ $category->name }}
                                </td>
                                <td style="width: 30%">
                                    <span class="color-box" style="background-color: {{ $category->color }};"></span>
                                </td>
                                <td style="width: 30%">
                                    <div class="btn-group-sm">
                                        <a class="btn-sm btn-info" href="{{ route('categories.show', $category->getKey()) }}">
                                            Visualizar
                                        </a>
                                        @can('update', $category)
                                            <a class="btn-sm btn-warning" href="{{ route('categories.edit', $category->getKey()) }}">
                                                Editar
                                            </a>
                                        @endcan
                                        @can('delete', $category)
                                            <a href="#" class="btn-sm btn-danger delete-category" data-id="{{ $category->getKey() }}">
                                                Excluir
                                            </a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <br>

            <div class="d-flex">
                <div class="mx-auto">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function() {
        $('.delete-category').click(function() {
            if (confirm('Confirma a exclusão da categoria?\n(Posts associados tambem serao excluidos) ')) {
                const categoryId = $(this).data('id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url: '{{ route('categories.destroy', '_category') }}'.replace('_category', categoryId),
                    method: 'DELETE',
                    success: function(xhr) {
                        alert('Categoria excluída com sucesso!');
                        window.location.reload();
                    },
                    error: function(xhr) {
                        alert('Falha ao excluir categoria!');
                    }
                });
            }
        });
    });
</script>
@endsection
