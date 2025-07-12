<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
        ]);
        Stock::create($validated);
        return redirect()->route('stocks.index')->with('success', 'Item cadastrado com sucesso!');
    }

    public function edit(Stock $stock)
    {
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
        ]);
        $stock->update($validated);
        return redirect()->route('stocks.index')->with('success', 'Item atualizado com sucesso!');
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index')->with('success', 'Item removido com sucesso!');
    }
}
