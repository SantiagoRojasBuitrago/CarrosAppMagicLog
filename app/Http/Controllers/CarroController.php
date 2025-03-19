<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::paginate(5);
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'año' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        Carro::create($request->all());
        return redirect()->route('carros.index')->with('success', 'Carro agregado exitosamente.');
    }

    public function show(Carro $carro)
    {
        return view('carros.show', compact('carro'));
    }

    public function edit(Carro $carro)
    {
        return view('carros.edit', compact('carro'));
    }

    public function update(Request $request, Carro $carro)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'año' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        $carro->update($request->all());
        return redirect()->route('carros.index')->with('success', 'Carro actualizado correctamente.');
    }

    public function destroy(Carro $carro)
    {
        $carro->delete();
        return redirect()->route('carros.index')->with('success', 'Carro eliminado correctamente.');
    }
}

