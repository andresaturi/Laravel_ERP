<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::paginate(12);

        return view('produtos.produtos', compact('produtos'));
    }
     
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }
   
    public function show(string $id){

        $produto = Produto::where('id', $id)->first();

        return view('produtos.details', ['produto' => $produto]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
