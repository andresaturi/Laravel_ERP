@extends('site.layout')
@section('title', 'Produtos')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">      
        <div class="container-fluid">
            <div class="overview-wrap">
                <h2 class="title-1">Meus Produtos</h2>               
                <a class="au-btn au-btn-icon au-btn--blue" href="{{ route('produtos.create') }}">
                    <i class="zmdi zmdi-plus"></i>
                    Criar Produto
                </a>
                
            </div>
           
            @if(count($produtos) > 0) 
            <hr>
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
            <hr>
            <div class="row text-center">
                <div class="col-lg-12 mx-auto">
                    {{ $produtos->links('custom.paginacao') }}
                </div>
            </div>
            
            @else
            <p>Nenhum Produto encontrado</p>
            @endif
        </div>
    </div>
</div>
@endsection