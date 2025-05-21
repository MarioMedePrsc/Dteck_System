<?php

namespace App\Http\Controllers;

use App\Models\VentaEstatus;
use App\Http\Requests\VentaEstatusRequest;

/**
 * Class VentaEstatusController
 * @package App\Http\Controllers
 */
class VentaEstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventaEstatuses = VentaEstatus::paginate();

        return view('venta-estatus.index', compact('ventaEstatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $ventaEstatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ventaEstatus = new VentaEstatus();
        return view('venta-estatus.create', compact('ventaEstatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaEstatusRequest $request)
    {
        VentaEstatus::create($request->validated());

        return redirect()->route('venta-estatuses.index')
            ->with('success', 'VentaEstatus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ventaEstatus = VentaEstatus::find($id);

        return view('venta-estatus.show', compact('ventaEstatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ventaEstatus = VentaEstatus::find($id);

        return view('venta-estatus.edit', compact('ventaEstatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaEstatusRequest $request, VentaEstatus $ventaEstatus)
    {
        $ventaEstatus->update($request->validated());

        return redirect()->route('venta-estatuses.index')
            ->with('success', 'VentaEstatus updated successfully');
    }

    public function destroy($id)
    {
        VentaEstatus::find($id)->delete();

        return redirect()->route('venta-estatuses.index')
            ->with('success', 'VentaEstatus deleted successfully');
    }
}
