<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepositoryInterface;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function firstOrCreate(array $attributes): Model
    {
        return $this->model->firstOrCreate($attributes);
    }

    /**
     * @param $id
     *
     * @return Model
     */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * @param  string $key
     * @param  string $value
     * @return Model
     */
    public function findWhere(string $key, string $value): ?Model
    {
        return $this->model->where($key, $value)->first();
    }

    /**
     * @param  array  $data
     * @param  string $field
     * @param  int    $id
     * @return Model
     */
    public function update(array $data, string $field, int $id): ?Model
    {
        $model = $this->findWhere($field, $id);
        $model->update($data);

        return $model;
    }

    /**
     * @param  string $field
     * @param  int    $id
     * @return int
     */
    public function delete(string $field, int $id): int
    {
        $model = $this->model->where($field, $id)->delete();
        return $model;
    }
}
