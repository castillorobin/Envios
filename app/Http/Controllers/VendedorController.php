<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Pedido;
use Carbon\Carbon;
class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        //return view('vendedor.index')->with(['vendedores'=>$vendedores, 'date'=>$date]);
        return view('vendedor.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last = Vendedor::latest('id')->first();
        $lastid =$last->id;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        $vendedores = Vendedor::all();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('vendedor.create')->with(['vendedores'=>$vendedores, 'date'=>$date, 'uid'=>$uid]);
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
        $vendedor = Vendedor::find($id);
        $last = Vendedor::latest('id')->first();
        $lastid = $last->id;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        return view('vendedor.edit')->with(['vendedor'=>$vendedor , 'uid'=>$uid]);
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
