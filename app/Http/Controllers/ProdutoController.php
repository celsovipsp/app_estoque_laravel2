<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function pesquisar()
    {
        //busca todos os produtos do banco de dados
        $produtos = Produto::all();

        //chama a view produto.pesquisar
        return view('produto.pesquisar')->with('produtos',$produtos);
        }
    }

