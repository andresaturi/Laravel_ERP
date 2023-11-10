@extends('site.layout')
@section('title', 'Produtos')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">      
        <div class="container-fluid">
            <a href="produtos/create" class="btn btn-primary btn-sm align-right">Novo Produto</a>
            <h5 class="heading-title">Produtos</h5>
            @if(count($produtos) > 0) 
            <div class="row">
                @foreach($produtos as $produto)
                <div class="col-md-4">
                    <section class="card">
                      <div class="card-body text-secondary">{{ Str::limit($produto->nome, 20) }}</div>
                        <a href="{{ route('produto.show', $produto->id) }}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="/produtos/edit/{{ $produto->id }}" class="btn btn-secondary btn-sm">Editar</a>
                    </section>
                    </section>
                </div>                               
                @endforeach           
            </div>
            @else
            <p>Nenhum Produto encontrado</p>
            @endif
        </div>
    </div>
</div>
@endsection