<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recolecta;
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
        return view('recolecta.crear');
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
        return redirect()->route('recoelcta.index');
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
