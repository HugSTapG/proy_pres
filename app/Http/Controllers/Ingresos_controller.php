<?php

namespace App\Http\Controllers;

use App\Models\Ingresos;
use Illuminate\Http\Request;

class Ingresos_controller extends Controller
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
        return view('ingresos.create');
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
            'Ingresos_v' => 'required',
        ]);
    
        Ingresos::create($request->all());
    
        return redirect()->route('proy_pres.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingresos = Ingresos::find($id);
        return view('ingresos.show', compact('ingresos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresos = Ingresos::find($id);
        return view('ingresos.edit', compact('ingresos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Ingresos_v' => 'required|max:255',
        ]);
        $ingresos = Ingresos::find($id);
        $ingresos->update($request->all());
        return redirect()->route('ingresos.index')
          ->with('success', 'Ingresos updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingresos = Ingresos::find($id);
        $ingresos-> delete();
        return redirect()->route('proy_pres.index')
                        ->with('success','User deleted successfully');
    }
}
