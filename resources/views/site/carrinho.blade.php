@extends('site.layout')
@section('title') {{ $meta['titulo'] }} @endsection
@section('conteudo')

<div class="row container">

  @if($mensagem = Session::get('sucesso'))
  
  <div class="card green">
        <div class="card-content white-text">
          <span class="card-title">Paabéns!</span>
          <p> {{ $mensagem }} </p>
        </div>
      </div>

  @endif

  <h5>Seu carrinho possui {{ $itens->count() }} 
    @if($itens->count() > 1)
      produtos
    @else
      produto
    @endif
    :   
  </h5>
  
    <table class="striped">
        <thead>
          <tr>
              <th></th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          @foreach($itens as $item)
          <tr>
            <td><img src="{{ $item->attributes->image }}" alt="{{ $item->name }}" width="70" class="responsive-img circle"></td>
            <td>{{ $item->name }}</td>
            <td>R$ {{ number_format($item->price, 2, ',', '.') }}</td>
            <td><input type="number" style="width: 40px; font-weight: 900" class="white center" name="quantity" value="{{ $item->quantity }}"></td>
            <td>
                <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>

                <form action="{{ route('site.removecarrinho') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{ $item->id }}">
                  <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                </form>

            </td>
          </tr>
          @endforeach

        </tbody>
      </table>

      <div class="row container center">
          <button class="btn-large waves-effect waves-light blue">Continuar comprando<i class="material-icons">arrow_back</i></button>
          <button class="btn-large waves-effect waves-light blue">Limpar<i class="material-icons">clear</i></button>
          <button class="btn-large waves-effect waves-light green">Finalizar Pedido<i class="material-icons">check</i></button>

      </div>

</div>

<div class="row center">
  <p>
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