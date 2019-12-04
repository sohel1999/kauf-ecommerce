<?php


namespace App\Repositories;


use App\Contracts\BaseContracts;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseContracts
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * create model and instances;
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * update models instance
     * @param array $attributes
     * @param int $id
     * @return mixed
     */
    public function update(array $attributes, int $id): bool
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * return all data oderBy id and sortBy decs
     * @param array $columns
     * @param string $oderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = ['*'], string $oderBy = 'id', string $sortBy = 'desc')
    {
        return $this->model->orderBy($oderBy, $sortBy)->with('parent')->get($columns);
    }

    /**
     * Find on By ID
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * find by id or throw exception
     * @param int $id
     * @return mixed
     * * @throws ModelNotFoundException
     */
    public function findOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * find one based on a different column
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data)
    {
        return $this->model->where($data)->all();
    }

    /**
     * find one based a different column or Throw exception
     * @param array $data
     * @return mixed
     */
    public function findOnBy(array $data)
    {
        return $this->model->where($data)->first();
    }


    public function findOnByOrFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }

    /**
     * Delete by id
     * @param int $id
     * @return mixed
     */
    public function delete(int $id): bool
    {
        return $this->model->find($id)->delete();
    }
}
