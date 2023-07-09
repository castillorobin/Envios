<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Facturacion;
use App\Models\Pedido;
use App\Models\Vendedor;
use Illuminate\Support\Str;
use \PDF; 

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        $vendedores = Vendedor::all();
       //$repartidores = Repartidor::all();
       return view('factura.index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores  ]);

    }

    public function filtro($comercio)
    {
        $pedidos = Pedido::where('vendedor', $comercio)->get();
        //$pedidos = Pedido::all();
        $vendedores = Vendedor::all();
        $vende = Vendedor::where('nombre', $comercio)->get();
       //$repartidores = Repartidor::all();
       return view('factura.inicio')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'vende'=>$vende  ]);

    }

    public function facturapdf(Request $request, $comercio)
    {

       // $pedidos = Pedido::all();
       $total = (float)$request->get('toti');
      
       if($request->get('comp')=='Ticket'){
        //$pedidos = Pedido::where('vendedor', $comercio)->get();
        $descuento = (float)$request->input('descu'); 
        if($descuento>0){
            $descue=$descuento;
        }else{
            $descue= 0;
        }


        $checked = $request->input('checked');
        $pedidos = Pedido::query()->find($checked);

        $pdf = PDF::loadView('factura.ticket', ['pedidos'=>$pedidos, 'total'=>$total, 'descue'=>$descue]);
       
        $pdf->setPaper('b6', 'portrait');
        return $pdf->stream();

       }elseif($request->get('comp')=='PDF'){

        //$pedidos = Pedido::where('vendedor', $comercio)->get();
        $checked = $request->input('checked');
        $pedidos = Pedido::query()->find($checked);
        $descuento = (float)$request->input('descu'); 
        if($descuento>0){
            $descue=$descuento;
        }else{
            $descue= 0;
        }
        

        $pdf = PDF::loadView('factura.facturapdf', ['pedidos'=>$pedidos, 'total'=>$total, 'descue'=>$descue]);
        //$pdf = PDF::loadView('factura.facturapdf');  
        //return view('pedido.etiqueta')->with('pedido', $pedido);
       
        //->setPaper('b7', 'portrait');
        $pdf->setPaper('letter', 'landscape');
        return $pdf->stream();
       }else{
        $total = 'no entro';
       }

      
        //return $pdf->download('factura.pdf');
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
