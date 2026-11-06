@extends('site.layout')
@section('title') {{ $produtos[0]->titulo }}  @endsection
@section('conteudo')

<div class="row container">

  <h5>Categoria: {{ $categoria->nome }}</h5>
	
	@foreach($produtos as $produto)
	<div class="col s12 m4">
	  <div class="card">
        <div class="card-image">
          <img src="{{ $produto->imagem }}">
          <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
      	<span class="card-title">{{ Str::limit($produto->nome, 10) }}</span>
      	<p>{{ Str::limit($produto->descricao, 30) }}</p>
        </div>
      </div>
	</div>
	@endforeach

</div>

<div class="row center">
  <p>
    {{ $produtos->links('custom.pagination') }}
  </p>
</div>

	<!-- <div class="col s12 m3">
		<div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
	</div>
	<div class="col s12 m3">
		<div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
	</div>
	<div class="col s12 m3">
		<div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
	</div> -->
</div>

@endsection


<?php /*
@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso'])

@component('components.sidebar')
	@slot('paragrafo')
		Texto qualquer vindo do slot
	@endslot
@endcomponent

{{-- Isso é um comentário --}}
<h1 class="h1">Essa é a Home</h1>

{{ $nome ?? 'sem nome' }}

{{--
<p>Meu nome é {{ $nome }} e minha idade é {{ $idade }} anos.</p>
<p>Estou na página inicial.</p>
--}}

@push('style')
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush
*/ ?>