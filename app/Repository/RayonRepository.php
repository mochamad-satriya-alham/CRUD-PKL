<?php

namespace App\Repository;

use App\Models\Rayon;

class RayonRepository implements RayonRepositoryInterface
{
    public function getAll()
    {
        return Rayon::all();
    }

    public function create(array $data)
    {
        return Rayon::create($data);
    }

    public function findById($id)
    {
        return Rayon::findOrFail($id);
    }

    public function update($id, array $data)
    {
        return Rayon::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Rayon::destroy($id);
    }
}
