<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\User;
use App\Models\VentaEstatus;
use App\Http\Requests\VentaRequest;

/**
 * Class VentaController
 * @package App\Http\Controllers
 */
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::paginate();

        return view('venta.index', compact('ventas'))
            ->with('i', (request()->input('page', 1) - 1) * $ventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $venta        = new Venta();
        $clientes     = Cliente::pluck('nombre', 'id');
        $usuarios     = User::pluck('name','id');
        $ventaEstatus = VentaEstatus::pluck('descripcion','id');
        return view('venta.create', compact('venta','clientes','usuarios','ventaEstatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaRequest $request)
    {
        $validated = $request->validated();
        $venta = Venta::create([
            'id_usuario' => Auth::id(),                      // Usuario autenticado
            'fecha_creacion' => Carbon::now(),               // Fecha actual
            'folio' => 0,                                    // Valor por defecto
            'id_estatus' => 1,                               // Valor por defecto
            'total_unidades' => 0,                           // Valor por defecto
            'total_iva' => 0,                                // Valor por defecto
            'subtotal' => 0,                                 // Valor por defecto
            'total' => 0,                                    // Valor por defecto
            'id_cliente' => $validated['id_cliente'],       // Valor que el usuario seleccionó
        ]);


        return redirect()->route('ventas.index')
            ->with('success', 'Venta created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $venta = Venta::find($id);
        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $venta        = Venta::find($id);
        $clientes     = Cliente::pluck('nombre', 'id');
        $usuarios     = User::pluck('name','id');
        $ventaEstatus = VentaEstatus::pluck('descripcion','id');
        return view('venta.edit', compact('venta', 'clientes','usuarios','ventaEstatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaRequest $request, Venta $venta)
    {
        $venta->update($request->validated());

        return redirect()->route('ventas.index')
            ->with('success', 'Venta updated successfully');
    }

    public function destroy($id)
    {
        Venta::find($id)->delete();

        return redirect()->route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }
}
