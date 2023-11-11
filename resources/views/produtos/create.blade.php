@extends('site.layout')
@section('title', 'Produtos')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">                                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Cadastro de produtos</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nome</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nome" name="nome" placeholder="Nome do Produto" class="form-control">
                                        <small class="form-text text-muted">Insira o nome do produto</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Categoria</button>
                                            <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                @foreach($categorias as $categoria)
                                                    <button type="button" tabindex="0" class="dropdown-item">{{ $categoria->nome }}</button>                                        
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Sub-Categoria</button>
                                            <div aria-hidden="true" role="menu" class="dropdown-menu">
                                                <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <a href="/categorias">Criar Categoria/SubCategoria</a> 
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="custo" class=" form-control-label">Custo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="custo" name="custo" placeholder="Custo" class="form-control">
                                        <small class="help-block form-text">Insira o custo do produto</small>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="descricao" class=" form-control-label">Descrição</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="descricao" id="descricao" rows="9" placeholder="Insira uma Descrição" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Ativo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Ativo</option>
                                            <option value="1">Inativo</option>                                            
                                        </select>
                                    </div>
                                </div>                                                       
                                
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">Imagens</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Cadastrar
                            </button>
                            <button type="reset" >
                                <a class="btn btn-danger btn-sm" href="{{ route('produtos.index') }}">
                                    <i class="fa fa-ban"></i> Cancelar
                                </a>
                            </button>
                        </div>
                    </div>                    
                </div>                         
@endsection