@extends('layout.principal')

@section('conteudo')
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
						<a href='produtos/mostra/{{ $produto->id }}' >
							<span class="glyphicon glyphicon-search"></span>
						</a>
					</td>
				</tr>
			@endforeach
			@if(old('nome'))
				<div class='alert alert-success'>
					<strong> Sucesso! </strong> O produto {{ old('nome') }} foi adcionado.
				</div>
			@endif
		</table>
	@endif
	<h4>
		<span class="label label-danger pull-right">Um ou menos itens no estoque!</span>
	</h4>
@stop
