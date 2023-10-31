@extends('site.layout')
@section('title', 'Carrinho')

@section('content')

<a href="/produtos">Voltar</a>

@if($itens->count() ==0)
    <p class="msg">Seu carrinho está Vazio!</p>
@else

<div class="container">
    @if($mensagem = Session::get('sucesso'))
        <p class="msg">{{ $mensagem }}</p>
    @endif
    <h3>Meu carrinho</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>                
                <th>Nome</th>
                <th>preço</th>
                <th>Qnt.</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($itens as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>RS {{ number_format($item->price, 2, ',', '.') }}</td>
                    {{-- BTN ATUALIZAR --}}
                    <td>
                        <form action="{{ route('atualizaCarrinho') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input min="1" style="width: 40px" type="number" name="quantity" value="{{ $item->quantity }}"></td>
                            <td>
                            <button>Atualizar</button> 
                        </form>
                                       
                    {{-- BTN DELETAR --}}
                                                                  
                        <form action="{{ route('removeCarrinho') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button>Remover</button>
                        </form>                        
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Valor Total: R$ {{ number_format(\Cart::getTotal(), 2, ',', '.') }}</h5>
    <a href="/produtos">Continuar comprando</a>
    <a href="{{ route('limparCarrinho') }}">Limpar carrinho</a>
    <button>Finalizar pagamento</button>
</div> 

@endif
@endsection