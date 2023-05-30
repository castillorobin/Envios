<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recolecta; 
use App\Models\Vendedor;
use App\Models\Repartidor;
use Carbon\Carbon;

class RecolectaController extends Controller
{
    /*
    function __construct(){
        $this->middleware('permission:ver-recolecta | crear-recolecta | editar-recolecta')->only('index');
        $this->middleware('permission:crear-recolecta', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-recolecta', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-recolecta', ['only'=>['destroy']]);

    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recolectas = Recolecta::paginate(5);
        return view('recolecta.index', compact('recolectas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repartidores = Repartidor::all();
        $vendedores = Vendedor::all();
        $recolectas = Recolecta::all();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('recolecta.create')->with(['recolectas'=>$recolectas, 'date'=>$date , 'repartidores'=>$repartidores, 'vendedores'=>$vendedores  ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Recolecta::create($request->all());
        return redirect()->route('recolecta.index');
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
        
    }
}
