<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProdutoController extends Controller{

    public function index(){
        $produtos = Produto::all();
        return view('produto.listagem', compact('produtos'));
    }

    public function create(){
        return view('produto.formulario');
    }

    public function store(Request $request){
        $produto = new Produto($request->all());
        $produto->save();

        return redirect('produtos')->withInput($request->only('nome'));
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        if(!isset($produto)){
            return "Esse produto não existe";
        }

        return view('produto.detalhes', compact('produto'));
    }

    
}
