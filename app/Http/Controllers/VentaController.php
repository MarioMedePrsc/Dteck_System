<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 
use App\Models\Venta;
use App\Models\VentaDetalle;
use App\Models\ServicioRealizado;
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
        //$ventas = Venta::paginate();
        $ventas = Venta::with(['cliente', 'usuario', 'estatus'])
               ->orderBy('id', 'desc')
               ->paginate();


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
        $validated = $request->validated();
        $venta->id_estatus = $request->input('id_estatus');
        $venta->id_cliente = $request->input('id_cliente');
        $venta->id_usuario = Auth::id();
        if($request->input('id_estatus') == '2')
        {
            $maxFolio = Venta::where('id_estatus', 2)->max('folio') ?? 0;
            $venta->folio = $maxFolio + 1;
            // Obtener los detalles que correspondan a articulos tipo 2
            $ventaDetalles = DB::table('venta_detalles as x')
                ->join('articulos as y', 'x.id_servicio', '=', 'y.id')
                ->where('x.id_venta', $venta->id)
                ->where('y.id_tipo', 2)
                ->select('x.id as id_venta_detalle')
                ->get();

            // Insertar servicios realizados
            foreach ($ventaDetalles as $detalle) {
                ServicioRealizado::create([
                    'id_venta_detalle' => $detalle->id_venta_detalle,
                    'id_estatus'       => 1, 
                    'fecha_inicio'     => now(),
                    'fecha_fin'        => null,
                    'notas'            => null,
                ]);
            }
        }
        $venta->save();

        return redirect()->route('ventas.index')
            ->with('success', 'Venta Actualizada con Éxito');
    }

    public function destroy($id)
    {
        console.log("Elimina Venta");
        Venta::find($id)->delete();

        return redirect()->route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }
}
