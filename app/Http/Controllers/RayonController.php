<?php

namespace App\Http\Controllers;
use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    
    public function index()
    {
        $rayons = Rayon::all();
        return view('Rayon.index', compact('rayons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Rayon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Rayon' => 'required|unique:rayons,Rayon',
        ]);

        Rayon::create([
            'rayon' => $request->Rayon,
        ]);

        return redirect()->route('Rayon.index')->with('sukses','berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
