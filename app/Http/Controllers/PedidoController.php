<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Vendedor;
use App\Models\Repartidor;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use \PDF; 
 
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

    public function camara()
    {
        
       return view('pedido.camara');

    }

    public function listaestatus()
    {

        //$pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
        return view('pedido.listaestatus');

        

    }

    public function reporte()
    {


        $pedidos = Pedido::all();

       $repartidores = Repartidor::all();
        return view('pedido.reportes', compact('pedidos','repartidores'));

        

    }
    public function reporteenvio()
    {


        $pedidos = Pedido::all();

       $repartidores = Repartidor::all();
        return view('pedido.reporteenvio', compact('pedidos','repartidores'));

        

    }
    
    public function printfiltro(Request $request,$filtro,$ftipo)
    {

        
        //$pedidos = Pedido::where('estado', $filtro)->get();
        $total= 0;
        $cant=0;
        $tenvi=0;

        $checked = $request->input('checked');
        if($request->input('checked')){
           //$cant = $cant + 1;
        }
        $pedidos = Pedido::query()->find($checked);
        foreach($pedidos as $suma){
            $total = $total + $suma->total;
            $tenvi = $tenvi + $suma->envio;
            $cant = $cant + 1;
        }

        $pdf = PDF::loadView('pedido.imprimirfiltro', ['pedidos'=>$pedidos, 'total'=>$total, 'cant'=>$cant, 'tenvi'=>$tenvi]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();
        

        /*

        if($ftipo==1){
            $pedidos = Pedido::where('fecha_entrega', $filtro)->get();
            
            foreach($pedidos as $suma){
                $total = $total + $suma->total;
                $tenvi = $tenvi + $suma->envio;
                $cant = $cant + 1;
            }

            $pdf = PDF::loadView('pedido.imprimirfiltro', ['pedidos'=>$pedidos, 'total'=>$total, 'cant'=>$cant, 'tenvi'=>$tenvi]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();

        }

        if($ftipo==2){
            $pedidos = Pedido::where('estado', $filtro)->get();
            
            foreach($pedidos as $suma){
                $total = $total + $suma->total;
                $tenvi = $tenvi + $suma->envio;
                $cant = $cant + 1;
            }
            $pdf = PDF::loadView('pedido.imprimirfiltro', ['pedidos'=>$pedidos, 'total'=>$total, 'cant'=>$cant, 'tenvi'=>$tenvi]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();
        }
        
        
        if($ftipo==3){
            $pedidos = Pedido::where('tipo', $filtro)->get();

            foreach($pedidos as $suma){
                $total = $total + $suma->total;
                $tenvi = $tenvi + $suma->envio;
                $cant = $cant + 1;
            }
            $pdf = PDF::loadView('pedido.imprimirfiltro', ['pedidos'=>$pedidos, 'total'=>$total, 'cant'=>$cant, 'tenvi'=>$tenvi]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();

            
        }
        
        if($ftipo==4){
            $pedidos = Pedido::where('ruta', $filtro)->get();

            foreach($pedidos as $suma){
                $total = $total + $suma->total;
                $tenvi = $tenvi + $suma->envio;
                $cant = $cant + 1;
            }
            $pdf = PDF::loadView('pedido.imprimirfiltro', ['pedidos'=>$pedidos, 'total'=>$total, 'cant'=>$cant, 'tenvi'=>$tenvi]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();


        }

        if($ftipo==5){
            $pedidos = Pedido::where('repartidor', $filtro)->get();
            
            foreach($pedidos as $suma){
                $total = $total + $suma->total;
                $tenvi = $tenvi + $suma->envio;
                $cant = $cant + 1;
            }
            $pdf = PDF::loadView('pedido.imprimirfiltro', ['pedidos'=>$pedidos, 'total'=>$total, 'cant'=>$cant, 'tenvi'=>$tenvi]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();
            
        }
        if($ftipo==6){
            $pedidos = Pedido::where('total', $filtro)->get();
            
            foreach($pedidos as $suma){
                $total = $total + $suma->total;
                $tenvi = $tenvi + $suma->envio;
                $cant = $cant + 1;
            }
            $pdf = PDF::loadView('pedido.imprimirfiltro', ['pedidos'=>$pedidos, 'total'=>$total, 'cant'=>$cant, 'tenvi'=>$tenvi]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();
            
        
        }

*/




        

    }
    
    public function repofiltro(Request $request)
    {
        $filtro = 1;
        $ftipo= 1;
        $pedidos = new Pedido();
        $pedidosall = new Pedido();
        $pedidosall = Pedido::all();
        $pedidosf = collect([$pedidosall]) ;
        $fecha = $request->get('fecha');
        $pedidos = $pedidosall;
        if($fecha != ""){

            
            $pedidos = $pedidosall->intersect(Pedido::whereIn('fecha_entrega', [$fecha])->get());

        }else{
            $pedidos = $pedidosall;
           
      
        }

        $estado = $request->get('estado');
        if($estado != "estado"){

            
            $pedidos = $pedidos->intersect(Pedido::whereIn('estado', [$estado])->get());

        }

        $ruta = $request->get('ruta');
        if($ruta!="ruta"){
            $pedidos = $pedidos->intersect(Pedido::whereIn('ruta', [$ruta])->get());
        }

        $tipo = $request->get('tipo');
        if($tipo!="tipo"){
            $pedidos = $pedidos->intersect(Pedido::whereIn('tipo', [$tipo])->get());
        }

        $repartidor = $request->get('repartidor');
        if($repartidor!="repartidor"){
            $pedidos = $pedidos->intersect(Pedido::whereIn('repartidor', [$repartidor])->get());
           
        }

        $total = $request->get('total');

        /*
        
       

        
        
        
*/
       // $pedidos = Pedido::where('fecha_entrega', 'LIKE', "%{$fecha}%")->where('estado', 'LIKE', "%{$estado}%")
       // ->where('ruta', 'LIKE', "%{$ruta}%")->where('tipo', 'LIKE', "%{$tipo}%")->where('repartidor', 'LIKE', "%{$repartidor}%")->get();
        $repartidores = Repartidor::all();
        return view('pedido.repofiltro', compact('pedidos','repartidores', 'filtro', 'ftipo'));

        

    }
    
    public function editrepa(Request $request)
    {

        $id = $request->get('idpe') ;

        $pedido = Pedido::find($id);

        if(isset($_GET['entre']))
        {
            $pedido->estado="Entregado";
        }elseif(isset($_GET['repro'])){
            $pedido->estado="Reprogramado";
            $pedido->nota=$request->get('nota');
        }else{
            $pedido->estado="No entregado";
            $pedido->nota=$request->get('nota');
        }

        $pedido->save();
        return view('home');
        //return $id;

        

    }
    
    public function verpedido($id)
    {

        //$pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
       $pedido = Pedido::find($id);

        return view('pedido.ver', compact('pedido'));

        

    }




    public function cambiarestatus(Request $request)
    {

        //$pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
       
       $id = $request->get('codigo') ;
       //$pedidos = new Pedido(); 

       $pedido = Pedido::find($id);
       //$pedidos = collect([$pedido]);
       $pedidos = collect([$pedido]);
      //$pedidos->add($pedido);

       //return $pedidos;
       return view('pedido.cambiarestatus', compact('pedidos'));


    }

    public function estado()
    {
        
        $pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
        return view('pedido.repartir', compact('pedidos'));


    }
    public function cestado(Request $request)
    {
        
        //$pedidos = Pedido::all();
       // $repartidores = Repartidor::all();
        //return view('pedido.repartir', compact('pedidos'));

        $id = $request->get('proba') ;
        

        $pedido = Pedido::find($id);
       
        $pedido->estado = $request->get('estado');
        $pedido->nota = $request->get('fpago');





        $pedido->save();
  
        $pedidos = Pedido::all();
        // $repartidores = Repartidor::all();
         return view('pedido.repartir', compact('pedidos'));


        


    }

    public function etiqueta($id)
    {
        $pedido = Pedido::find($id);
        $fecha= $pedido->fecha_entrega;
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$fecha = Carbon::parse($pedido->fecha_entrega);
$mes = $meses[($fecha->format('n')) - 1];
$fechal = $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');
        //$fechal = date('l d F Y',strtotime($fecha));
        //$fechal = strftime('%A %e de %B de %Y', $fecha);
        //$fecha = Carbon::parse($fecha);
       // $fechal = $fecha->format('l jS F Y');

       
        $pdf = PDF::loadView('pedido.etiqueta', ['pedido'=>$pedido, 'fechal'=>$fechal ]);
        //return view('pedido.etiqueta')->with('pedido', $pedido);

        $customPaper = array(0,0,283.80,283.80);
        $pdf->setPaper($customPaper, 'landscape');
        return $pdf->stream();


    }

    public function imprimire(Request $request)
    {

        $pedidos = new Pedido();
        
        $pedidos->vendedor = $request->get('comer');
        $pedidos->destinatario = $request->get('desti');
        $pedidos->telefono = $request->get('telefono');
        $pedidos->direccion = $request->get('direccion');
        $pedidos->fecha_entrega = $request->get('fentrega');
        $pedidos->precio = $request->get('precio');
        $pedidos->envio = $request->get('envio');
        $pedidos->total = $request->get('total');
        $pedidos->estado = $request->get('estado');
        $pedidos->pagado = $request->get('pagado');
        $pedidos->servicio = $request->get('servicio');
        $pedidos->tipo = $request->get('tenvio');
        $pedidos->nota = $request->get('nota');
        $pedidos->ingresado = $request->get('ingresado');
        $pedidos->agencia = $request->get('agencia');
        $pedidos->repartidor = $request->get('repartidor');
        $pedidos->ruta = $request->get('ruta');
        $pedidos->estante = $request->get('estante');
        //$pedidos->foto = $request->get('foto');

        if($request->hasFile('foto')){
            
            $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedidos->foto = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);

        } 
        if($request->hasFile('foto2')){
            
            $imagen = $request->file("foto2");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedidos->foto2 = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);

        }



        $pedidos->save();

        //$pedido = Pedido::latest()->first();
       // $pdf = PDF::loadView('pedido.etiqueta', ['pedido'=>$pedido]);
        //return view('pedido.etiqueta')->with('pedido', $pedido);


        #$pedido = Pedido::find($id);
        $pedido = Pedido::latest()->first();
        $pdf = PDF::loadView('pedido.etiqueta', ['pedido'=>$pedido]);
        //return view('pedido.etiqueta')->with('pedido', $pedido);
        $customPaper = array(0,0,10,10);
        $pdf->setPaper($customPaper);
        return $pdf->stream();


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

    public function desdeenvio()
    {
        $last = Pedido::latest('id')->first();
        $lastid = $last->id;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        
        
        
        $repartidores = Repartidor::all();
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");

        return view('pedido.denvio')->with(['vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid]);

        //return view('pedido.create')->with('vendedores', $vendedores);
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
        $pedido->estante = $request->get('estante');
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

        if(isset($_POST['impri']))
        {
            $pedido = Pedido::latest('id')->first();
        $fecha= $pedido->fecha_entrega;
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$fecha = Carbon::parse($pedido->fecha_entrega);
$mes = $meses[($fecha->format('n')) - 1];
$fechal = $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');
        //$fechal = date('l d F Y',strtotime($fecha));
        //$fechal = strftime('%A %e de %B de %Y', $fecha);
        //$fecha = Carbon::parse($fecha);
       // $fechal = $fecha->format('l jS F Y');

        $pdf = PDF::loadView('pedido.etiqueta', ['pedido'=>$pedido, 'fechal'=>$fechal ]);
        //return view('pedido.etiqueta')->with('pedido', $pedido);

        $customPaper = array(0,0,283.80,283.80);
        $pdf->setPaper($customPaper, 'landscape');
        return $pdf->stream();
        }else{
            return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'rutaf'=>$rutaf, 'repaf'=>$repaf]);
        }

        
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
        $pedido->cobroenvio = $request->get('cenvio');
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
        $pedido->estante = $request->get('estante');
      

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
        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect('/pedidos');
    }
}
