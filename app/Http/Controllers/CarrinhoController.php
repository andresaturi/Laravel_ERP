<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista(){
        $itens = \Cart::getContent();
        
        return view('produtos.carrinho', compact('itens'));
    }

    public function addCarrinho(Request $request){
        $itens = \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('carrinho')->with('sucesso', 'Produto adicionado ao Carrinho');
    }

    public function removeCarrinho(Request $request){
        \Cart::remove($request->id);

        return redirect()->route('carrinho')->with('sucesso', 'Produto removido do Carrinho');
    }

    public function limparCarrinho(){
        \Cart::clear();

        return redirect()->route('carrinho');
    }

    public function atualizaCarrinho(Request $request){
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity)
                ]
            ]);
            return redirect()->route('carrinho')->with('sucesso', 'Quantidade atualizada');
    }

}
