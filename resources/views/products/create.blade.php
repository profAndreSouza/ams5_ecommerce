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
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select name="category" class="form-control">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</div>

@endsection