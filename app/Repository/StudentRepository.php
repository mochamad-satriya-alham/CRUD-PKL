<?php

namespace App\Repository;

use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAllWithRayon()
    {
        return Student::with('rayon')->get();
    }

    public function create(array $data)
    {
        return Student::create($data);
    }

    public function findById($id)
    {
        return Student::findOrFail($id);
    }

    public function update($id, array $data)
    {
        return Student::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Student::destroy($id);
    }
}
