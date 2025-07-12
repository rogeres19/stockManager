@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estoque</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('stocks.create') }}" class="btn btn-primary mb-3">Novo Item</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{ $stock->id }}</td>
                    <td>{{ $stock->nome }}</td>
                    <td>{{ $stock->quantidade }}</td>
                    <td>R$ {{ number_format($stock->preco, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('stocks.edit', $stock) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('stocks.destroy', $stock) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 