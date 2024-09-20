<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

// Página inicial do e-commerce (lista de produtos)
Route::get('/', [ProductController::class, 'index'])->name('home');

// Autenticação
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

// Registro 
Route::get('/register', [UserController::class, 'showFormRegister']);
Route::post('/register', [UserController::class, 'register'])->name('register');

// Rotas de produtos
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index'); // Listar todos os produtos
    Route::get('/create', [ProductController::class, 'create'])->name('product.create'); // Formulário de cadastro de produto
    Route::post('/', [ProductController::class, 'store'])->name('product.store'); // Salvar novo produto
    Route::get('/{id}', [ProductController::class, 'show'])->name('product.show'); // Detalhes de um produto específico
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit'); // Formulário de edição de produto
    Route::put('/{id}', [ProductController::class, 'update'])->name('product.update'); // Atualizar produto
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy'); // Excluir produto
});

// Rotas de categorias
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index'); // Listar todas as categorias
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create'); // Formulário de cadastro de categoria
    Route::post('/', [CategoryController::class, 'store'])->name('category.store'); // Salvar nova categoria
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit'); // Formulário de edição de categoria
    Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update'); // Atualizar categoria
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy'); // Excluir categoria
});

// Carrinho de compras
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});

// Finalizar pedido
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');