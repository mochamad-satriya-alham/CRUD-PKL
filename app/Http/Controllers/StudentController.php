<?php

namespace App\Http\Controllers;
use App\Models\Rayon;
use App\Models\student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function data()
    {
        $students = student::with('rayon')->get();
        return view('student.data', compact('students'));
    }

    public function buat()
    {
        $rayons = Rayon::all(); // Ambil semua data rayon
        return view('student.tambah', compact('rayons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function proses(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'rombel' => 'required',
            'nisn' => 'required|numeric|unique:students,nisn',
            'rayon_id' => 'required',
        ]);

        student::create([
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'nisn' => $request->nisn,
            'rayon_id' => $request->rayon_id,
        ]);

        return redirect()->back()->with('sukses','berhasil di tambah!');
    }


    public function edit($id)
    {
        $student = student::find($id);
        $rayons = Rayon::all(); // Ambil semua data rayon
        return view('student.edit', compact('student', 'rayons'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'rombel' => 'required',
            'nisn' => 'required|numeric|unique:students,nisn,' . $id,
            'rayon_id' => 'required',
        ]);

        student::where('id', $id)->update([
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'nisn' => $request->nisn,
            'rayon_id' => $request->rayon_id,
        ]);

        return redirect()->route('Siswa.data')->with('sukses', 'berhasil mengubah data siswa!');
    }


    public function destroy($id)
    {
        student::where('id', $id)->delete();

        return redirect()->back()->with('hapus', 'berhasil menghapus data siswa!');
    }
}
