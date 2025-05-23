<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\EquipoTipo;
use App\Models\EquipoMarca;
use App\Http\Requests\EquipoRequest;
use Illuminate\Http\Request;

/**
 * Class EquipoController
 * @package App\Http\Controllers
 */
class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::paginate();

        return view('equipo.index', compact('equipos'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $equipo    = new Equipo();
        $clienteId = $request->get('id_cliente');
        $ventaId   = $request->input('venta_id'); 
        $tipos     = EquipoTipo::pluck('descripcion','id');
        $marcas    = EquipoMarca::pluck('descripcion','id');
        return view('equipo.create', compact('equipo','clienteId','ventaId','tipos','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipoRequest $request)
    {
        $validated = $request->validated();
        $equipo = new Equipo();
        $equipo->id_cliente     = $request->input('id_cliente');
        $equipo->id_tipo        = $request->input('id_tipo');
        $equipo->id_marca       = $request->input('id_marca');
        $equipo->modelo         = $request->input('modelo');
        $equipo->numero_serie   = $request->input('numero_serie');
        $equipo->descripcion    = $request->input('descripcion');

        $equipo->save();

        if ($request->has('venta_id') && !empty($request->input('venta_id'))) {
            $idVenta = $request->input('venta_id');

            return redirect()->route('venta-detalles.create', ['venta_id' => $idVenta])
                ->with('success', 'Equipo creado correctamente ');
        }

        // Redirección por defecto si no hay venta asociada
        return redirect()->route('equipos.index')
            ->with('success', 'Equipo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipoRequest $request, Equipo $equipo)
    {
        $equipo->update($request->validated());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo updated successfully');
    }

    public function destroy($id)
    {
        Equipo::find($id)->delete();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo deleted successfully');
    }
    public function createFromVenta(Request $request)
    {
        $equipo    = new Equipo();
        $clienteId = $request->query('id_cliente');
        $ventaId   = $request->query('venta_id'); 
        $tipos     = EquipoTipo::pluck('descripcion','id');
        $marcas    = EquipoMarca::pluck('descripcion','id');
        return view('equipo.createFromVenta', compact('equipo','clienteId','ventaId','tipos','marcas'));
    }
}
