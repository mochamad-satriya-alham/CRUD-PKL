<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function data()
    {
        $students = student::all();
        return view('student.data', compact('students'));
    }

    public function buat()
    {
        return view('student.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function proses(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'rombel' => 'required',
            'nisn' => 'required|numeric|unique:students,nisn', // adalah aturan yang memastikan bahwa nilai nisn yang dimasukkan belum ada di dalam database 
            'rayon' => 'required',
        ]);

        student::create([
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'nisn' => $request->nisn,
            'rayon' => $request->rayon,
        ]);

        return redirect()->back()->with('sukses','berhasil di tambah!');
    }


    public function edit($id)
    {
        $student = student::find($id);

        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'rombel' => 'required',
            'nisn' => 'required|numeric|unique:students,nisn',
            'rayon' => 'required',
        ]);

        student::where('id', $id)->update([
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'nisn' => $request->nisn,
            'rayon' => $request->rayon,
        ]);

        return redirect()->route('Siswa.data')->with('sukses', 'berhasil mengubah data!');
    }


    public function destroy($id)
    {
        student::where('id', $id)->delete();

        return redirect()->back()->with('hapus', 'berhasil menghapus data!');
    }
}
