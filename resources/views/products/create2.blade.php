@extends("layouts\web")

@section("content")


<div class="container">
    <div class="align-self-center">
        <h3 class="text-center mb-4">Cadastrar Produto</h3>
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                @error('name') {{ $message }} @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">
                @error('description') {{ $message }} @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preço</label>
                <input type="number" step="0.1" class="form-control" name="price" id="price" value="{{ old('price') }}">
                @error('description') {{ $message }} @enderror
            </div>
            <h3>Categoria</h3>
            <div class="mb-3">
                <label for="category.name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="category[name]" id="category.name" value="{{ old('category.name') }}">
                @error('name') {{ $message }} @enderror
            </div>
            <div class="mb-3">
                <label for="category.description" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="category[description]" id="category.description" value="{{ old('category.description') }}">
                @error('description') {{ $message }} @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</div>

@endsection