<?php

namespace App\Repository;


interface StudentRepositoryInterface
{
    public function getAllWithRayon();
    public function create(array $data);
    public function findById($id);
    public function update($id, array $data);
    public function delete($id);
}