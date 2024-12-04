<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    function index(Request $request) {
        $products = Product::all();
        return view('products.index', compact('products'));
        
    }

    function search(Request $request) {
        $query = $request->query('q');
        $products = Product::where('name', 'like', '%' . $query . '%')
                    ->orwhere('description', 'like', '%' . $query . '%')
                    ->get();

        return view('products.index', compact('products'));
    }
    
    function create(Request $request) {
        $categories = Category::all();
        return view('products.create2', compact('categories'));

    }
    
    function store(Request $request) {

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required'
        // ]);

        // $product = new Product($request->only('name', 'description', 'price'));
        // $product->category_id = $request->category;
        // $product->save();


        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category.name' => 'required',
            'category.description' => 'required'
        ]);

        $category = Category::create($validatedData['category']);
        $product = new Product($request->only('name', 'description', 'price'));
        $category->products()->save($product);
        
        
        return redirect()->route('product.index');
    }
    
    function show(Request $request) {
        return "mostrar";
    }
    
    function edit(Request $request) {
        return "editar";
    }
    
    function update(Request $request) {
        return "atualizar";
    }
    
    function destroy(Request $request) {
        return "remover";
    }

}
