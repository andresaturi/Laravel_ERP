@extends('site.layout')
@section('title', 'Produto')

@section('content')

<div class="col-md-10 offset-md-1">
    <a href="/produtos">Voltar</a>
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/products/" class="img-fluid" alt="">
        </div>
        <div id="info-container" class="col-md-6">
            <h2>{{ $produto->nome }}</h2>
            <h4>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h4>           
                        
        </div>
        <div class="col-md-12" id="description-container">
            <p>postado por: {{ $produto->user->name }}</p>
            <p>Categoria: {{ $produto->categoria->nome }}</p>
        </div>   
    </div>
</div>

@endsection