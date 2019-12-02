<?php


namespace App\Repositories;


use App\CategoryContract\CategoryContract;
use App\Traits\ImageUploadAble;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends BaseRepository implements CategoryContract
{

    use ImageUploadAble;


    public function __construct(Model $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listCategories(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findCategoryById(int $id)
    {
        // TODO: Implement findCategoryById() method.
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function createCategory(array $params)
    {
        // TODO: Implement createCategory() method.
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateCategory(array $params)
    {
        // TODO: Implement updateCategory() method.
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteCategory($id)
    {
        // TODO: Implement deleteCategory() method.
    }
}
