<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    //
    public function carrinhoLista() 
    {
        
        $titulo = "CARRINHO | Curso Laravel";
        $meta['titulo'] = $titulo;
        
        // retorna o conteudo do carrinho
        $itens = \Cart::getContent();
        
        // dd($itens);

        return view('site.carrinho', compact(['meta', 'itens']));

    }

    public function adicionaCarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado no carrinho com sucesso');

    }

    



}
