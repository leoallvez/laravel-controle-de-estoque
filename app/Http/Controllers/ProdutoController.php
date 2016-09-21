<?php

namespace App\Http\Controllers;
use App\Produto;
#use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
#use App\Http\Requests;
use Request;

class ProdutoController extends Controller{

    public function lista(){
        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        //return view('listagem')->with('produtos',$produtos);
        return view('listagem', compact('produtos'));
    }

    public function mostra(){
        $id = Request::input('id', 0);
        //$resposta = DB::select('select * from produtos where id = ?',[$id]);
        $p = Produto::find($id);
        if(!isset($p)){
            return "Esse produto não existe";
        }
        //$p = $resposta[0];
        return view('detalhes', compact('p'));
    }
}
