<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proy_pres;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class Proy_pres_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proy_pres_t = DB::table('proy_pres_t')->get();
        return view('proy_pres.index', ['proy_pres_t' => $proy_pres_t]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proy_pres.create');
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
            'Ingresos' => 'required',
            'Gastos' => 'required',
        ]);
    
        Proy_pres::create($request->all());
    
        return redirect()->route('proy_pres.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proy_pres  $proy_pres
     * @return \Illuminate\Http\Response
     */
    public function show(Proy_pres $proy_pres)
    {
        return view('proy_pres.show',compact('proy_pres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proy_pres  $proy_pres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proy_pres = Proy_pres::find($id);
        return view('proy_pres.edit', compact('proy_pres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proy_pres  $proy_pres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Ingresos' => 'required|max:255',
            'Gastos' => 'required|max:255',
        ]);
        $proy_pres = Proy_pres::find($id);
        $proy_pres->update($request->all());
        return redirect()->route('proy_pres.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proy_pres  $proy_pres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proy_pres = Proy_pres::find($id);
        $proy_pres-> delete();
        return redirect()->route('proy_pres.index')
                        ->with('success','User deleted successfully');
    }
}
