<?php

namespace App\Repositories;

use App\Models\Truck as Model;
use Illuminate\Support\Collection;

class TruckRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return Collection
     */
    public function getList(int $limit = 10, int $offset = 0): Collection
    {
        return $this->startConditions()
            ->newQuery()
            ->limit($limit)
            ->offset($offset)
            ->get();
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function getEdit(int $id): ?Model
    {
        return $this->startConditions()->find($id);
    }
}
