<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ProdutoController extends Controller
{
    public function pesquisar()
    {
        //Receber o conteudo elemento 'descriçao' do formulario
        $descricao = Input::get('descricao');

        //busca produtos com o conteudo da $descricao
        $produtos = Produto::where('descricao','like','%'.$descricao.'%')->get();

        //chama a view produto.pesquisar e envia os produtos encontrados
        return view('produto.pesquisar')->with('produtos',$produtos);
        }
    }

    public function mostrar_inserir()
    {
        return view('produto.inserir');
    }



