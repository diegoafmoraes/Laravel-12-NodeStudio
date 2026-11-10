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
		
		<form action="{{ route('site.addcarrinho') }}" method="post" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="id" value="{{ $produto->id }}">
			<input type="hidden" name="name" value="{{ $produto->nome }}">
			<input type="hidden" name="price" value="{{ $produto->preco }}">
			<input type="number" name="qnt" min="1" value="1">
			<input type="hidden" name="img" value="{{ $produto->imagem }}">
			<button class="btn orange btn-large">Comprar</button>
		</form>

	</div>

</div>

@endsection