@extends('layout.principal')

@section('conteudo')
	<h1>Novo Produto</h1>
	@if(count($errors) > 0)
		<div class='alert alert-danger'>
			<ul>
				@foreach($errors->all() as $erro)
					<li> {{$erro}} </li>
				@endforeach
			</ul>
		</div>
	@endif
	<form  action='{{ action('ProdutoController@store') }}' method="post">
		<input type="hidden" name="_token" value="{{{csrf_token()}}}">
		<div class='form-group'>
			<label>Nome</label>
			<input type='text' name='nome' class='form-control' value="{{old('nome')}}"/>
		</div>
		<div class='form-group'>
			<label>Descrição</label>
			<input type='text' name='descricao' class='form-control' value="{{old('descricao')}}"/>
		<div class='form-group'>
			<label>Valor</label>
			<input type='text' name='valor' class='form-control' value="{{old('valor')}}">
		</div>
		<div class='form-group'>
			<label>Quantidade</label>
			<input type='number' name='quantidade' class='form-control' value="{{old('quantidade')}}"/>
		</div>
		<button type='submit' class='btn btn-primary '>Criar</button>
	</form>
@stop