<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;
use \App\Models\Categoria;

class SiteController extends Controller
{
    //
    /**
     * Display an index listing page 
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

    //
    /**
     * Display product details 
     */
    public function details($slug)
    {

        $titulo = "Detalhes do PRODUTO | Curso Laravel";
        
        $produto = Produto::where('slug', $slug)->first();

        $produto['titulo'] = $titulo;

        return view('site.details', compact('produto'));

    }

    //
    /**
     * Display category details 
     */
    public function categoria($nome)
    {

        $titulo = "PRODUTO da categria | Curso Laravel";
        
        // 1. Busca a categoria pelo slug (se não achar, dá erro 404 automaticamente com firstOrFail)
        // $categoria = Categoria::find($nome);
        $categoria = Categoria::where('nome', $nome)->firstOrFail();

        $produtos = Produto::where('id_categoria', $categoria->id)->paginate(3);

        $produtos[0]['titulo'] = $titulo;

        return view('site.categoria', compact('produtos', 'categoria'));

    }




}
