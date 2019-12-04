<?php


namespace App\Repositories;


use App\CategoryContract\CategoryContract;
use App\Models\Category;
use App\Traits\ImageUploadAble;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;

class CategoryRepository extends BaseRepository implements CategoryContract
{

    use ImageUploadAble;


    /**
     * @var Category
     */


    public function __construct(Category $model)
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
        return $this->all();
    }

    public function createList()
    {
        return $this->model->all(['id', 'name']);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findCategoryById(int $id)
    {
        return $this->find($id);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function createCategory(array $params)
    {
        try {
            $collection = collect($params);
            $image = null;
            if ($collection->has('image')) {
                $image = $this->uploadOne($params['image'], 'uploads/categories');
            }
            $slug = Str::slug($collection->get('name'));
            $is_menu = $collection->has('is_menu') ? '1' : '0';
            $featured = $collection->has('featured') ? '1' : '0';
            $status = $collection->has('featured') ? '1' : '0';
            $merge = $collection->merge(compact('is_menu', 'featured', 'status', 'image', 'slug'));
            $category = new Category($merge->all());
            $category->save();
            return $category;
        } catch (QueryException $exception) {
            throw  new InvalidArgumentException($exception->getMessage());
        }
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
