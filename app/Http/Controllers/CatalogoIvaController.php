<?php

namespace App\Http\Controllers;

use App\Models\CatalogoIva;
use App\Http\Requests\CatalogoIvaRequest;

/**
 * Class CatalogoIvaController
 * @package App\Http\Controllers
 */
class CatalogoIvaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogoIvas = CatalogoIva::paginate();

        return view('catalogo-iva.index', compact('catalogoIvas'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogoIvas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogoIva = new CatalogoIva();
        return view('catalogo-iva.create', compact('catalogoIva'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatalogoIvaRequest $request)
    {
        CatalogoIva::create($request->validated());

        return redirect()->route('catalogo-ivas.index')
            ->with('success', 'CatalogoIva created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $catalogoIva = CatalogoIva::find($id);

        return view('catalogo-iva.show', compact('catalogoIva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $catalogoIva = CatalogoIva::find($id);

        return view('catalogo-iva.edit', compact('catalogoIva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatalogoIvaRequest $request, CatalogoIva $catalogoIva)
    {
        $catalogoIva->update($request->validated());

        return redirect()->route('catalogo-ivas.index')
            ->with('success', 'CatalogoIva updated successfully');
    }

    public function destroy($id)
    {
        CatalogoIva::find($id)->delete();

        return redirect()->route('catalogo-ivas.index')
            ->with('success', 'CatalogoIva deleted successfully');
    }
}
