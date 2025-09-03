<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class TransportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transportistas = Transportista::paginate(10);
        return view('transportistas.index', compact('transportistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transportistas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:120',
            'telefono' => 'nullable|string|max:30',
            'licencia' => 'nullable|string|max:50',
            'empresa' => 'nullable|string|max:120',
        ]);

        Transportista::create($request->all());

        return redirect()->route('transportistas.index')
            ->with('success', 'Transportista creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transportista $transportista)
    {
        return view('transportistas.show', compact('transportista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transportista $transportista)
    {
        return view('transportistas.edit', compact('transportista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transportista $transportista)
    {
        $request->validate([
            'nombre' => 'required|string|max:120',
            'telefono' => 'nullable|string|max:30',
            'licencia' => 'nullable|string|max:50',
            'empresa' => 'nullable|string|max:120',
        ]);

        $transportista->update($request->all());

        return redirect()->route('transportistas.index')
            ->with('success', 'Transportista actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transportista $transportista)
    {
        $transportista->delete();

        return redirect()->route('transportistas.index')
            ->with('success', 'Transportista eliminado exitosamente.');
    }
}
