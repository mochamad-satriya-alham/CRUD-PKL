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


    public function edit($id)
    {
        $rayon = Rayon::find($id);
        return view('Rayon.edit', compact('rayon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Rayon' => 'required|unique:rayons,Rayon',
        ]);

        Rayon::where('id', $id)->update([
            'rayon' => $request->Rayon,
        ]);

        return redirect()->route('Rayon.index')->with('sukkses','berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Rayon::where('id', $id)->delete();
        return redirect()->back()->with('hapus', 'berhasil menghapus Rayon!');
    }
}
