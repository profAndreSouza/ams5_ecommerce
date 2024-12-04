@extends("layouts\web")

@section("content")


<div class="container">
            <div class="row text-center">
                <h2 class="mb-5">Produtos 
                    <a href="{{ route('product.create') }}" class="btn btn-primary btn-lg">Cadastrar</a>
                </h2>              
                
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">{{ $product->category->name }}</p>
                            <p class="card-text">R$ {{ $product->price }}</p>
                            <a href="#" class="btn btn-outline-primary">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

@endsection