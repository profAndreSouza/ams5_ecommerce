<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    function index(Request $request) {

        return view('products.index');
        
    }
    
    function create(Request $request) {
        return "criar";
    }
    
    function store(Request $request) {
        return "salvar";
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
