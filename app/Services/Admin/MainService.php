<?php

namespace App\Services\Admin;

class MainService
{
    protected $model;

    public function getAll()
    {
        return $this->model::query()->orderBy('created_at', 'desc')->get();
    }

    public function getById(int $id)
    {
        return $this->model::findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update($model, array $data)
    {
        $model->update($data);
    }

    public function delete($model)
    {
        $model->delete();
    }
}
