@extends("layouts\web")

@section("content")


<div class="container">
            <div class="row text-center">
                <h2 class="mb-5">Produtos</h2>
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$10.00</p>
                            <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">$20.00</p>
                            <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">$30.00</p>
                            <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection