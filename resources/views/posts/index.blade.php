@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('helpers.flash-message')
            <div class="card">
                <div class="card-header">
                    <span>Posts</span>
                    <div class="float-right">
                        <a href="{{ route('posts.create') }}" class="btn-primary btn-sm">Novo Post</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive text-center" style="display: table">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Categorias</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td style="width: 40%">
                                    {{ $post->title }}
                                </td>
                                <td style="width: 30%">
                                    @if (count($post->categories) > 0)
                                        @foreach($post->categories as $category)
                                            <p>{{ $category->name }}</p>
                                        @endforeach
                                    @else
                                        <p>Nenhuma</p>
                                    @endif
                                </td>
                                <td style="width: 30%">
                                    <div class="btn-group-sm">
                                        @can('view', $post)
                                            <a class="btn-sm btn-info" href="{{ route('posts.show', $post->getKey()) }}">
                                                Visualizar
                                            </a>
                                        @endcan
                                        @can('update', $post)
                                            <a class="btn-sm btn-warning" href="{{ route('posts.edit', $post->getKey()) }}">
                                                Editar
                                            </a>
                                        @endcan
                                        @can('delete', $post)
                                            <a href="#" class="btn-sm btn-danger delete-post" data-id="{{ $post->getKey() }}">
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
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function() {
        $('.delete-post').click(function() {
            if (confirm('Confirma a exclusão do post?')) {
                const postId = $(this).data('id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url: '{{ route('posts.destroy', '_post') }}'.replace('_post', postId),
                    method: 'DELETE',
                    success: function(xhr) {
                        alert('Post excluído com sucesso!');
                        window.location.reload();
                    },
                    error: function(xhr) {
                        alert('Falha ao excluir post!');
                    }
                });
            }
        });
    });
</script>
@endsection
