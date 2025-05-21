<?php

namespace App\Http\Controllers;

use App\Models\ServicioRealizado;
use App\Http\Requests\ServicioRealizadoRequest;

/**
 * Class ServicioRealizadoController
 * @package App\Http\Controllers
 */
class ServicioRealizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicioRealizados = ServicioRealizado::paginate();

        return view('servicio-realizado.index', compact('servicioRealizados'))
            ->with('i', (request()->input('page', 1) - 1) * $servicioRealizados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicioRealizado = new ServicioRealizado();
        return view('servicio-realizado.create', compact('servicioRealizado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicioRealizadoRequest $request)
    {
        ServicioRealizado::create($request->validated());

        return redirect()->route('servicio-realizados.index')
            ->with('success', 'ServicioRealizado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $servicioRealizado = ServicioRealizado::find($id);

        return view('servicio-realizado.show', compact('servicioRealizado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servicioRealizado = ServicioRealizado::find($id);

        return view('servicio-realizado.edit', compact('servicioRealizado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicioRealizadoRequest $request, ServicioRealizado $servicioRealizado)
    {
        $servicioRealizado->update($request->validated());

        return redirect()->route('servicio-realizados.index')
            ->with('success', 'ServicioRealizado updated successfully');
    }

    public function destroy($id)
    {
        ServicioRealizado::find($id)->delete();

        return redirect()->route('servicio-realizados.index')
            ->with('success', 'ServicioRealizado deleted successfully');
    }
}
