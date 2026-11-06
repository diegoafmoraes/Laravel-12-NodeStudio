@extends('site.layout')
@section('title') {{ $produto->titulo }}  @endsection
@section('conteudo')

<div class="row container">

	<div class="col sm12 m6">
		<img class="mt1 mt-2" src="{{ $produto->imagem }}" class="responsive-img">
	</div>

	<div class="col sm12 m6">
		<h4>{{ $produto->nome }}</h4>
		<h4>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h4>
		<p>{{ $produto->descricao }}</p>
		<p>Postado por: <strong> {{ $produto->user->firstName }} </strong> em {{ $produto->created_at->format('d/m/Y H:i:s') }}<br />
		Categoria: {{ $produto->categoria->nome }}</p>
		
		<button class="btn orange btn-large">Comprar</button>

	</div>

</div>

@endsection