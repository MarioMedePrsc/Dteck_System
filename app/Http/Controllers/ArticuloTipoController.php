<?php

namespace App\Http\Controllers;

use App\Models\ArticuloTipo;
use App\Http\Requests\ArticuloTipoRequest;

/**
 * Class ArticuloTipoController
 * @package App\Http\Controllers
 */
class ArticuloTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articuloTipos = ArticuloTipo::paginate();

        return view('articulo-tipo.index', compact('articuloTipos'))
            ->with('i', (request()->input('page', 1) - 1) * $articuloTipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articuloTipo = new ArticuloTipo();
        return view('articulo-tipo.create', compact('articuloTipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticuloTipoRequest $request)
    {
        ArticuloTipo::create($request->validated());

        return redirect()->route('articulo-tipos.index')
            ->with('success', 'Tipo de articulo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articuloTipo = ArticuloTipo::find($id);

        return view('articulo-tipo.show', compact('articuloTipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $articuloTipo = ArticuloTipo::find($id);

        return view('articulo-tipo.edit', compact('articuloTipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticuloTipoRequest $request, ArticuloTipo $articuloTipo)
    {
        $articuloTipo->update($request->validated());

        return redirect()->route('articulo-tipos.index')
            ->with('success', 'Tipo de articulo editado exitosamente');
    }

    public function destroy($id)
    {
        ArticuloTipo::find($id)->delete();

        return redirect()->route('articulo-tipos.index')
            ->with('success', 'Tipo de articulo eliminado exitosamente');
    }
}
