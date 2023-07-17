<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estatus;
use App\Models\Pedido;
use App\Models\Repartidor;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use \PDF;

class EstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //$pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
       $pedidosestado = Estatus::all();
       foreach($pedidosestado as $estado){
        $estado->delete();
    }
       return view('estatus.index');
    }

    public function listaestatus(Request $request)
    {

        //$pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
       $id = $request->get('codigo') ;
       $pedido = Pedido::find($id);
       $pedidoesta = Estatus::find($id);
       $pedidos = new Estatus();
       $pedidoadd = new Estatus(); 
       
        if(Estatus::where('id', $id )->exists()){
            $nota="Registro Duplicado";
            $pedidos = Estatus::all();
       
            return view('estatus.cambiarestatus', compact('pedidos', 'nota'));
        }else{

            
       $pedido = Pedido::find($id);
       //$pedidos = collect([$pedido]);
       $pedidoadd->id = $pedido->id;
       $pedidoadd->vendedor = $pedido->vendedor;
        $pedidoadd->destinatario = $pedido->destinatario;
        $pedidoadd->telefono = $pedido->telefono;
        $pedidoadd->direccion = $pedido->direccion;
        $pedidoadd->fecha_entrega = $pedido->fecha_entrega;
        $pedidoadd->precio = $pedido->precio;
        $pedidoadd->envio = $pedido->envio;
        $pedidoadd->total = $pedido->total;
        $pedidoadd->estado = $pedido->estado;
        $pedidoadd->pagado = $pedido->pagado;
        $pedidoadd->servicio = $pedido->servicio;
        $pedidoadd->tipo = $pedido->tipo;
        $pedidoadd->nota = $pedido->nota;
        $pedidoadd->ingresado = $pedido->ingresado;
        $pedidoadd->agencia = $pedido->agencia;
        $pedidoadd->repartidor = $pedido->repartidor;
        $pedidoadd->ruta = $pedido->ruta;

       $pedidoadd->save();
      //$pedidos->add($pedido);
      $repartidores = Repartidor::all();
        $pedidos = Estatus::all();
        $nota=" ";
       return view('estatus.cambiarestatus', compact('pedidos', 'nota','repartidores'));

        }


       
       


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function cambiando(Request $request)
    {
        $id = $request->get('proba') ;


        $pedidosestado = Estatus::all();
        foreach($pedidosestado as $estado){
            $pedido = Pedido::find($estado->id);
            
            $pedido->estado = $request->get('estado');
            if ($request->check2) {
                // Do something
                $pedido->repartidor = $request->get('repartidor');
            }
            $pedido->save();
            //$estado->estado = $request->get('estado');
            //$estado->save();
        }
        
        foreach($pedidosestado as $estado){
            $estado->delete();
        }
        
        //$pedido = Pedido::find($id);
       
        //$pedido->estado = $request->get('estado');
        //$pedido->nota = $request->get('fpago');





        //$pedido->save();
  
        //DB::table('estatuses')->delete();
        // $repartidores = Repartidor::all();
        return view('estatus.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
