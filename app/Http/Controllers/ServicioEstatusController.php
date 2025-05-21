<?php

namespace App\Http\Controllers;

use App\Models\ServicioEstatus;
use App\Http\Requests\ServicioEstatusRequest;

/**
 * Class ServicioEstatusController
 * @package App\Http\Controllers
 */
class ServicioEstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicioEstatuses = ServicioEstatus::paginate();

        return view('servicio-estatus.index', compact('servicioEstatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $servicioEstatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicioEstatus = new ServicioEstatus();
        return view('servicio-estatus.create', compact('servicioEstatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicioEstatusRequest $request)
    {
        ServicioEstatus::create($request->validated());

        return redirect()->route('servicio-estatuses.index')
            ->with('success', 'ServicioEstatus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $servicioEstatus = ServicioEstatus::find($id);

        return view('servicio-estatus.show', compact('servicioEstatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servicioEstatus = ServicioEstatus::find($id);

        return view('servicio-estatus.edit', compact('servicioEstatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicioEstatusRequest $request, ServicioEstatus $servicioEstatus)
    {
        $servicioEstatus->update($request->validated());

        return redirect()->route('servicio-estatuses.index')
            ->with('success', 'ServicioEstatus updated successfully');
    }

    public function destroy($id)
    {
        ServicioEstatus::find($id)->delete();

        return redirect()->route('servicio-estatuses.index')
            ->with('success', 'ServicioEstatus deleted successfully');
    }
}
