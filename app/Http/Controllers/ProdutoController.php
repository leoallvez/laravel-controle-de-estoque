<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{

    public function index(){
        $produtos = Produto::all();
        #dd(count($produtos));
        return view('produto.listagem', compact('produtos'));
    }

    public function show($id){
        $produto = Produto::find($id);
        if(!isset($produto)){
            return "Esse produto não existe";
        }

        return view('produto.detalhes', compact('produto'));
    }
}
