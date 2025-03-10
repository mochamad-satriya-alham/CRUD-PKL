<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\RayonRepositoryInterface;

class RayonController extends Controller
{
    protected $rayonRepository;

    public function __construct(RayonRepositoryInterface $rayonRepository)
    {
        $this->rayonRepository = $rayonRepository;
    }

    public function index()
    {
        $rayons = $this->rayonRepository->getAll();
        return view('Rayon.index', compact('rayons'));
    }

    public function create()
    {
        return view('Rayon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Rayon' => 'required|unique:rayons,Rayon',
        ]);

        $this->rayonRepository->create([
            'rayon' => $request->Rayon,
        ]);

        return redirect()->route('Rayon.index')->with('sukses', 'berhasil di tambah!');
    }

    public function edit($id)
    {
        $rayon = $this->rayonRepository->findById($id);
        return view('Rayon.edit', compact('rayon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Rayon' => 'required|unique:rayons,Rayon',
        ]);

        $this->rayonRepository->update($id, [
            'rayon' => $request->Rayon,
        ]);

        return redirect()->route('Rayon.index')->with('sukses', 'berhasil di ubah!');
    }

    public function destroy($id)
    {
        $this->rayonRepository->delete($id);
        return redirect()->back()->with('hapus', 'berhasil menghapus Rayon!');
    }
}
