<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder{
	public function run(){
		DB::insert("insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)",array('Geladeira', 2, 590.00, 'Gelo na porta'));
		DB::insert("insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)",array('Fogão', 2, 590.00, 'Forno eletrico'));
		DB::insert("insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)",array('Microondas', 1, 300.00, 'Super Rapido'));
	}
}
