<?php

namespace App\Repository;

interface RayonRepositoryInterface
{
    public function getAll();
    public function create(array $data);
    public function findById($id);
    public function update($id, array $data);
    public function delete($id);
}
