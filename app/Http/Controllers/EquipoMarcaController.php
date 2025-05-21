<?php

namespace App\Http\Controllers;

use App\Models\EquipoMarca;
use App\Http\Requests\EquipoMarcaRequest;

/**
 * Class EquipoMarcaController
 * @package App\Http\Controllers
 */
class EquipoMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipoMarcas = EquipoMarca::paginate();

        return view('equipo-marca.index', compact('equipoMarcas'))
            ->with('i', (request()->input('page', 1) - 1) * $equipoMarcas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipoMarca = new EquipoMarca();
        return view('equipo-marca.create', compact('equipoMarca'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipoMarcaRequest $request)
    {
        EquipoMarca::create($request->validated());

        return redirect()->route('equipo-marcas.index')
            ->with('success', 'EquipoMarca created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $equipoMarca = EquipoMarca::find($id);

        return view('equipo-marca.show', compact('equipoMarca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipoMarca = EquipoMarca::find($id);

        return view('equipo-marca.edit', compact('equipoMarca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipoMarcaRequest $request, EquipoMarca $equipoMarca)
    {
        $equipoMarca->update($request->validated());

        return redirect()->route('equipo-marcas.index')
            ->with('success', 'EquipoMarca updated successfully');
    }

    public function destroy($id)
    {
        EquipoMarca::find($id)->delete();

        return redirect()->route('equipo-marcas.index')
            ->with('success', 'EquipoMarca deleted successfully');
    }
}
