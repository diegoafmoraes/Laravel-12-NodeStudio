<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titulo = "HOME | Curso Laravel";
        
        // $produtos = Produto::all(); // Traz todoss os registros
        $produtos = Produto::paginate(3); // Paginacao de resultados

        $produtos[0]['titulo'] = $titulo;

        return view('site.home', compact('produtos'));

        // dd($produtos);
        // dd(compact('produtos'));

        // return "index";

/*        $produtos = Produto::all();
          dd($produtos);
*/
/*        $tit = "HOME: (Titulo deve vir do BD)";
        $nome = "Diego";
        $idade = 45;*/

        /*return view('site.home', [
            'title' => $tit,
            'nome' => $nome, 
            'idade' => $idade
        ]);*/


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "show:" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
