@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Item de Estoque</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('stocks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ old('quantidade') }}" required>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" id="preco" class="form-control" value="{{ old('preco') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('stocks.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection 