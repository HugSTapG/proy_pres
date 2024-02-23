<?php

namespace App\Http\Controllers;

use App\Models\Gastos;
use Illuminate\Http\Request;

class Gastos_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gastos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Gastos_v' => 'required',
        ]);
    
        Gastos::create($request->all());
    
        return redirect()->route('proy_pres.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gastos = Gastos::find($id);
        return view('gastos.show', compact('gastos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gastos = Gastos::find($id);
        return view('gastos.edit', compact('gastos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Gastos_v' => 'required|max:255',
        ]);
        $gastos = Gastos::find($id);
        $gastos->update($request->all());
        return redirect()->route('gastos.index')
          ->with('success', 'Gastos updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gastos = Gastos::find($id);
        $gastos-> delete();
        return redirect()->route('proy_pres.index')
                        ->with('success','Gastos deleted successfully');
    }
}
