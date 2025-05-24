<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicioRealizado;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $serviciosPendientes = ServicioRealizado::with([
            'ventaDetalle.articulo',     // Servicio
            'ventaDetalle.equipo',       // Equipo
            'ventaDetalle.venta.cliente' // Cliente
        ])->where('id_estatus', 1)->get();

        return view('home', compact('serviciosPendientes'));
    }
}
