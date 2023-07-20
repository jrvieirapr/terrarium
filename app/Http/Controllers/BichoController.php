<?php

namespace App\Http\Controllers;

use App\Models\Bicho;
use App\Http\Requests\StoreBichoRequest;
use App\Http\Requests\UpdateBichoRequest;
use App\Models\TipoBicho;

class BichoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bichos = Bicho::all();
        $total = $bichos->count();
        return view("bichos.index", compact(["bichos", "total"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos_bichos = TipoBicho::all();
        return view("bichos.create", compact(["tipos_bichos"]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBichoRequest $request)
    {
        $data = $request->all();      
        $bicho = Bicho::create($data);       
        return redirect()->route('bichos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicho $bicho)
    {
        return view("bichos.show",compact(["bicho"]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bicho $bicho)
    {
        return view("bichos.edit", compact(["bicho"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBichoRequest $request, Bicho $bicho)
    {
        $data = $request->all();
        $bicho->update($data);    
        return redirect()->route('bichos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicho $bicho)
    {
        if (isset($bicho)) {
            $bicho->delete();            
        } 
        return redirect()->route('bichos.index');
    }
}
