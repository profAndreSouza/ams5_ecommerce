<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    function index(Request $request) {
        return "index";
    }
    
    function create(Request $request) {
        return "criar";
    }
    
    function store(Request $request) {
        return "salvar";
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
