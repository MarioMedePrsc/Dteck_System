<?php

namespace App\Http\Controllers;

use App\Models\VentaDetalle;
use App\Http\Requests\VentaDetalleRequest;

/**
 * Class VentaDetalleController
 * @package App\Http\Controllers
 */
class VentaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventaDetalles = VentaDetalle::paginate();

        return view('venta-detalle.index', compact('ventaDetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $ventaDetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ventaDetalle = new VentaDetalle();
        return view('venta-detalle.create', compact('ventaDetalle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaDetalleRequest $request)
    {
        VentaDetalle::create($request->validated());

        return redirect()->route('venta-detalles.index')
            ->with('success', 'VentaDetalle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ventaDetalle = VentaDetalle::find($id);

        return view('venta-detalle.show', compact('ventaDetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ventaDetalle = VentaDetalle::find($id);

        return view('venta-detalle.edit', compact('ventaDetalle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaDetalleRequest $request, VentaDetalle $ventaDetalle)
    {
        $ventaDetalle->update($request->validated());

        return redirect()->route('venta-detalles.index')
            ->with('success', 'VentaDetalle updated successfully');
    }

    public function destroy($id)
    {
        VentaDetalle::find($id)->delete();

        return redirect()->route('venta-detalles.index')
            ->with('success', 'VentaDetalle deleted successfully');
    }
}
