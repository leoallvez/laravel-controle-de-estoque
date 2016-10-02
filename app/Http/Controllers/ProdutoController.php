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

    public function create(){
        return view('produto.formulario');
    }

    public function store(Request $request){
        #dd($request->all());
        $produto = new Produto($request->all());
        $produto->save();

        #flash('Produto adicionado com sucesso!', 'sucess');
        return redirect('/');
    }

    public function show($id){
        $produto = Produto::find($id);
        if(!isset($produto)){
            return "Esse produto não existe";
        }

        return view('produto.detalhes', compact('produto'));
    }

    
}
