@extends('layout.principal')

@section('conteudo')
	<?php $flag = 0; ?>
	@if(count($produtos) == 0)
		<div class="alert alert-danger">
			<span>Você não tem nenhum produto cadastrado</span>
		</div>
	@else
		<h1>Listagem de produtos</h1>
		<table class="table table-striped table-bordered">
			{{--Cometário em blade--}}
			@foreach($produtos as $produto)
				<tr class={{ $produto->quantidade <= 1 ? 'danger' : null }}>
					<td>{{ $produto->nome }}</td>
					<td>{{ $produto->valor }}</td>
					<td>{{ $produto->descricao }}</td>
					<td>{{ $produto->quantidade }}</td>
					<td>
						<a href='{{ action('ProdutoController@create', $produto->id) }}' >
							<span class="glyphicon glyphicon-search"></span>
						</a>
					</td>
					<td>
						<a href='{{ action('ProdutoController@destroy', $produto->id) }}'>
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
					@if($produto->quantidade <= 1 ) <?php $flag++ ?> @endif
				</tr>
			@endforeach
			@if(old('nome'))
				<div class='alert alert-success'>
					<strong> Sucesso! </strong> O produto {{ old('nome') }} foi adcionado.
				</div>
			@endif
		</table>
	@endif
	@if($flag > 0)
		<h4>
			<span class="label label-danger pull-right">{{ $flag }} produtos com um ou menos itens no estoque!</span>
		</h4>
	@endif
@stop
