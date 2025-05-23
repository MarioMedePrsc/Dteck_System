<?php

namespace App\Http\Controllers;

use App\Models\VentaDetalle;
use App\Models\Venta;
use App\Models\Articulo;
use App\Models\Equipo;
use Illuminate\Http\Request;
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
    public function create(Request $request)
    {
        $ventaDetalle = new VentaDetalle();
        $ventaId      = $request->get('venta_id');
        $venta        = Venta::find($ventaId);
        $equipos      = Equipo::where('id_cliente', $venta->id_cliente)
                        ->pluck('descripcion', 'id');
        $articulos    = Articulo::with('iva:id,tasa_iva')
        ->select('id', 'descripcion', 'id_tipo', 'id_iva', 'costo_unidad')
        ->get();

        return view('venta-detalle.create', compact('ventaDetalle', 'venta','articulos','equipos'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaDetalleRequest $request)
    {
        $validated = $request->validated();

        $ventaDetalle = new VentaDetalle();

        $ventaDetalle->id_venta     = $request->input('id_venta');
        $ventaDetalle->id_servicio  = $request->input('id_servicio');
        $ventaDetalle->cantidad     = $request->input('cantidad');
        $ventaDetalle->costo_unidad = $request->input('costo_unidad');
        $ventaDetalle->id_equipo    = $request->input('id_equipo'); // ← aquí se guarda manual
        $ventaDetalle->tasa_iva     = $request->input('tasa_iva');
        $ventaDetalle->iva          = $request->input('iva');
        $ventaDetalle->subtotal     = $request->input('subtotal');
        $ventaDetalle->total        = $request->input('total');
        // otros campos si es necesario

        $ventaDetalle->save();
        
        Venta::actualizarCabecera($ventaDetalle->id_venta);

        return redirect()->route('ventas.edit', [
            'venta' => $ventaDetalle->id_venta
        ]);

        /*
        return redirect()->route('venta-detalles.index')
            ->with('success', 'VentaDetalle created successfully.');
            */
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
        $venta        = Venta::find($ventaDetalle->id_venta);
        $equipos      = Equipo::where('id_cliente', $venta->id_cliente)
                        ->pluck('descripcion', 'id');
        $articulos    = Articulo::with('iva:id,tasa_iva')
                        ->select('id', 'descripcion', 'id_tipo', 'id_iva', 'costo_unidad')
                        ->get();

        return view('venta-detalle.edit', compact('ventaDetalle','venta','articulos','equipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaDetalleRequest $request, VentaDetalle $ventaDetalle)
    {
        $validated = $request->validated();
        //$ventaDetalle->update($request->validated());
        $ventaDetalle->id_venta     = $request->input('id_venta');
        $ventaDetalle->id_servicio  = $request->input('id_servicio');
        $ventaDetalle->cantidad     = $request->input('cantidad');
        $ventaDetalle->costo_unidad = $request->input('costo_unidad');
        $ventaDetalle->id_equipo    = $request->input('id_equipo'); // ← aquí se guarda manual
        $ventaDetalle->tasa_iva     = $request->input('tasa_iva');
        $ventaDetalle->iva          = $request->input('iva');
        $ventaDetalle->subtotal     = $request->input('subtotal');
        $ventaDetalle->total        = $request->input('total');
        // otros campos si es necesario

        $ventaDetalle->save();
        Venta::actualizarCabecera($ventaDetalle->id_venta);
        return redirect()->route('ventas.edit', [
            'venta' => $request->input('id_venta')
        ]);
        /*
        return redirect()->route('venta-detalles.index')
            ->with('success', 'VentaDetalle updated successfully');
            */
    }

    public function destroy($id)
    {
        
        $ventaDetalle = VentaDetalle::findOrFail($id);
        $idVenta = $ventaDetalle->id_venta; 
        $ventaDetalle->delete();
        
        Venta::actualizarCabecera($ventaDetalle->id_venta);

        return redirect()->route('ventas.edit', ['venta' => $idVenta])
                        ->with('success', 'Detalle eliminado correctamente.');
    }

}
