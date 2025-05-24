<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Http\Requests\ArticuloRequest;
use App\Models\CatalogoIva;
use App\Models\ArticuloTipo;
/**
 * Class ArticuloController
 * @package App\Http\Controllers
 */
class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulo::with('tipo', 'iva')->paginate();


          return view('articulo.index', compact('articulos'))
            ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articulo = new Articulo();
        $ivas     = CatalogoIva::all(); 
        $tipos    = ArticuloTipo::pluck('descripcion', 'id');
        return view('articulo.create', compact('articulo', 'ivas','tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticuloRequest $request)
    {
        Articulo::create($request->validated());

        return redirect()->route('articulos.index')
            ->with('success', 'Articulo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);

        return view('articulo.show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        $ivas     = CatalogoIva::all();
        $tipos    = ArticuloTipo::pluck('descripcion', 'id');

        return view('articulo.edit', compact('articulo', 'ivas','tipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticuloRequest $request, Articulo $articulo)
    {
        $articulo->update($request->validated());

        return redirect()->route('articulos.index')
            ->with('success', 'Articulo updated successfully');
    }

    public function destroy($id)
    {
        Articulo::find($id)->delete();

        return redirect()->route('articulos.index')
            ->with('success', 'Articulo deleted successfully');
    }
}
