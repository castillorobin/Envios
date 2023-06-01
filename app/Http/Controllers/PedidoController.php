<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Vendedor;
use App\Models\Repartidor;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
        return view('pedido.index', compact('pedidos'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        $last = Pedido::latest('id')->first();
        setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        $repartidores = Repartidor::all();
        $fecha = Carbon::today();
        //$date = $date->format('l jS F Y');
        $fecha = strftime("%A %d de %B %Y");
        return view('pedido.create')->with(['vendedores'=>$vendedores, 'fecha'=>$fecha, 'repartidores'=>$repartidores, 'last'=>$last, 'usuarios'=>$usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last = Pedido::latest('id')->first();
        $lastid =$last->id;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        $rutaf='seleccionar';
        $pedidof='1970-01-01';
        $repaf='';
        $pedido = new Pedido();
        
        $pedido->vendedor = $request->get('comer');
        $pedido->destinatario = $request->get('desti');
        $pedido->telefono = $request->get('telefono');
        $pedido->direccion = $request->get('direccion');
        $pedido->fecha_entrega = $request->get('fentrega');
        $pedido->precio = $request->get('precio');
        $pedido->envio = $request->get('envio');
        $pedido->total = $request->get('total');
        $pedido->estado = $request->get('estado');
        $pedido->pagado = $request->get('pagado');
        $pedido->servicio = $request->get('servicio');
        $pedido->tipo = $request->get('tenvio');
        $pedido->nota = $request->get('nota');
        $pedido->ingresado = $request->get('ingresado');
        $pedido->agencia = $request->get('agencia');
        $pedido->repartidor = $request->get('repartidor');
        $pedido->ruta = $request->get('ruta');
        //$pedidos->foto = $request->get('foto');

        if($request->hasFile('foto')){
            
            $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedido->foto = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);

        }
        if($request->hasFile('foto2')){
            
            $imagen = $request->file("foto2");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedido->foto2 = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);

        }



        $pedido->save();
  
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        $vendedores = Vendedor::all();
        $repartidores = Repartidor::all();
        $pedidos = Pedido::all();
        return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'rutaf'=>$rutaf, 'repaf'=>$repaf]);
       //return redirect('/pedido/etiqueta')->with('id', $pedidos->id);
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
        $repartidores = Repartidor::all();
        $vendedores = Vendedor::all();
        $pedido = Pedido::find($id);
        return view('pedido.edit')->with(['pedido'=>$pedido, 'vendedores'=>$vendedores, 'repartidores'=>$repartidores]);
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
        $last = Pedido::latest('id')->first();
        $lastid = $last->id;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        $pedido = Pedido::find($id);
        $rutaf='seleccionar';
        $pedidof='1970-01-01';
        $repaf='';
        $pedido->vendedor = $request->get('comer');
        $pedido->destinatario = $request->get('desti');
        $pedido->telefono = $request->get('telefono');
        $pedido->direccion = $request->get('direccion');
        $pedido->fecha_entrega = $request->get('fentrega');
        $pedido->precio = $request->get('precio');
        $pedido->envio = $request->get('envio');
        $pedido->total = $request->get('total');
        $pedido->estado = $request->get('estado');
        $pedido->pagado = $request->get('pagado');
        $pedido->servicio = $request->get('servicio');
        $pedido->tipo = $request->get('tenvio');
        $pedido->nota = $request->get('nota');
        $pedido->ingresado = $request->get('ingresado');
        $pedido->agencia = $request->get('agencia');
        $pedido->repartidor = $request->get('repartidor');
        $pedido->ruta = $request->get('ruta');

      

        if($request->hasFile('foto')){
           
            if($pedido->foto==''){
                $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedido->foto = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);
            }elseif($pedido->foto2==''){
                $imagen = $request->file("foto");
                $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
                $pedido->foto2 = $nombreimagen;
                $ruta = public_path("imgs/fotos/");
                $imagen->move($ruta,$nombreimagen);
            }elseif($pedido->foto3==''){
                $imagen = $request->file("foto");
                $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
                $pedido->foto3 = $nombreimagen;
                $ruta = public_path("imgs/fotos/");
                $imagen->move($ruta,$nombreimagen);
            }elseif($pedido->foto4==''){
                $imagen = $request->file("foto");
                $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
                $pedido->foto4 = $nombreimagen;
                $ruta = public_path("imgs/fotos/");
                $imagen->move($ruta,$nombreimagen);
            }
            
            
            
            

        }





        $pedido->save();
  
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        $vendedores = Vendedor::all();
        $repartidores = Repartidor::all();
        $pedidos = Pedido::all();
        return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'rutaf'=>$rutaf, 'repaf'=>$repaf]);
      
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
