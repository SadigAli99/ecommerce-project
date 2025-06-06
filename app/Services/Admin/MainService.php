<?php

namespace App\Services\Admin;

class MainService
{
    protected $model;

    public function getAll()
    {
        return $this->model::query()->orderBy('created_at', 'desc')->get();
    }

    public function paginate(string $order_by = 'created_at', string $dir = 'desc', int $limit = 10, array $filter_data = [])
    {
        $query = $this->model::query();

        if (count($filter_data)) {
            foreach ($filter_data as $key => $filter_item) {
                if ($key == 'search') {
                    if (!empty($filter_item)) {
                        $searchAttributes = defined($this->model . '::SEARCH_ATTRIBUTES')
                            ? $this->model::SEARCH_ATTRIBUTES
                            : ['name'];
                        $query->where(function ($q) use ($searchAttributes, $filter_item) {
                            foreach ($searchAttributes as $searchAttribute) {
                                return $q->orWhere($searchAttribute, 'like', "%$filter_item%");
                            }
                        });
                    }
                } else {
                    if (!is_null($filter_item)) {
                        $query->where($key, $filter_item);
                    }
                }
            }
        }

        return $query
            ->orderBy($order_by, $dir)
            ->paginate($limit);
    }

    public function getById(int $id)
    {
        return $this->model::findOrFail($id);
    }

    public function create(array $data)
    {
        $data['sort'] = $this->getSortedValue();
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

    public function getFirst()
    {
        return $this->model::first();
    }

    public function createOrUpdate(array $data)
    {
        $model = $this->getFirst();
        if (is_null($model)) $model = $this->create($data);
        else $this->update($model, $data);
        return $model;
    }

    private function getSortedValue(): int
    {
        return count($this->getAll()) + 1;
    }
}
