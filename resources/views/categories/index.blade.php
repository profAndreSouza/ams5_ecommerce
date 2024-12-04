@extends("layouts\web")

@section("content")


<div class="container">
    <div class="align-self-center">
        <h2 class="text-center mb-4">Listar Categoria
            <a href="{{ route('category.create') }}" class="btn btn-primary btn-lg">Cadastrar</a>
        </h2>
                
        <ul class="list-group">
            @foreach ($categories as $category)
            <li class="list-group-item">
                <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection