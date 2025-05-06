<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreRepository
 *
 * @package App\Repositories;
 *
 * Репозиторій роботи з сутністю.
 * Може видавати набори даних. Не може створювати/змінювати сутності.
 */
abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected Model $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return Model
     */
    protected function startConditions(): Model
    {
        return clone $this->model;
    }

    /**
     * @return string
     */
    abstract protected function getModelClass(): string;
}
