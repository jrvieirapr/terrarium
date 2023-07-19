<?php

namespace App\Http\Controllers;

use App\Models\TipoBicho;
use App\Http\Requests\StoreTipoBichoRequest;
use App\Http\Requests\UpdateTipoBichoRequest;

class TipoBichoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_bichos = TipoBicho::all();
        // $tipos_bicho = TipoBicho::Paginate(50);
        $total = $tipos_bichos->count();
        return view("tipos_bichos.index", compact(["tipos_bichos", "total"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipos_bichos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoBichoRequest $request)
    {
        $data = $request->all();
        $tipos = TipoBicho::create($data);       
        return redirect()->route('tiposbichos.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(TipoBicho $tiposbicho)
    {
        return view("tipos_bichos.show",compact(["tiposbicho"]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoBicho $tiposbicho)
    {
        return view("tipos_bichos.edit", compact(["tiposbicho"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoBichoRequest $request, TipoBicho $tiposbicho)
    {
        $data = $request->all();
        $tiposbicho->update($data);
        return redirect()->route('tiposbichos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoBicho $tiposbicho)
    {    
        if (isset($tiposbicho)) {
            $tiposbicho->delete();            
        } 
        return redirect()->route('tiposbichos.index');
    }
}
