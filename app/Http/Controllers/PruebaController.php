<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosPrueba['prueba'] = Prueba::paginate(10);
        return view('prueba.index',$datosPrueba);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPrueba = $request->except('_token');
        Prueba::insert($datosPrueba);
        return response()->json($datosPrueba);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(Prueba $prueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prueba=Prueba::findOrFail($id);
        return view('prueba.edit',compact('prueba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPrueba = $request->except('_token','_method');
        Prueba::where('id' ,'=', $id)->update($datosPrueba);
        $prueba=Prueba::findOrFail($id);
        return view('prueba.edit',compact('prueba'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prueba::destroy($id);
        return redirect('prueba');
    }
}
