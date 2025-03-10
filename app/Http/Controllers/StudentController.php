<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;
use App\Repository\StudentRepositoryInterface;

class StudentController extends Controller
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    
    public function data()
    {
        $students = $this->studentRepository->getAllWithRayon();
        return view('student.data', compact('students'));
    }

    
    public function buat()
    {
        $rayons = Rayon::all(); 
        return view('student.tambah', compact('rayons'));
    }

    
    public function proses(Request $request)
    {
        $this->studentRepository->create($request->all());
        return redirect()->back()->with('sukses', 'Berhasil di tambah!');
    }

    
    public function edit($id)
    {
        $student = $this->studentRepository->findById($id);
        $rayons = Rayon::all(); 
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

        $this->studentRepository->update($id, $request->all());

        return redirect()->route('Siswa.data')->with('sukses', 'Berhasil mengubah data siswa!');
    }


    public function destroy($id)
    {
        $this->studentRepository->delete($id);

        return redirect()->back()->with('hapus', 'Berhasil menghapus data siswa!');
    }
}
