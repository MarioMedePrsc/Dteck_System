<?php

namespace App\Http\Controllers;

use App\Models\EquipoTipo;
use App\Http\Requests\EquipoTipoRequest;

/**
 * Class EquipoTipoController
 * @package App\Http\Controllers
 */
class EquipoTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipoTipos = EquipoTipo::paginate();

        return view('equipo-tipo.index', compact('equipoTipos'))
            ->with('i', (request()->input('page', 1) - 1) * $equipoTipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipoTipo = new EquipoTipo();
        return view('equipo-tipo.create', compact('equipoTipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipoTipoRequest $request)
    {
        EquipoTipo::create($request->validated());

        return redirect()->route('equipo-tipos.index')
            ->with('success', 'Tipo de equipo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $equipoTipo = EquipoTipo::find($id);

        return view('equipo-tipo.show', compact('equipoTipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipoTipo = EquipoTipo::find($id);

        return view('equipo-tipo.edit', compact('equipoTipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipoTipoRequest $request, EquipoTipo $equipoTipo)
    {
        $equipoTipo->update($request->validated());

        return redirect()->route('equipo-tipos.index')
            ->with('success', 'Tipo de equipo actualizado exitosamente');
    }

    public function destroy($id)
    {
        EquipoTipo::find($id)->delete();

        return redirect()->route('equipo-tipos.index')
            ->with('success', 'Tipo de equipo eliminado exitosamente');
    }
}
