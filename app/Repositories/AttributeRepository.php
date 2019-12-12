<?php


namespace App\Repositories;


use App\Contracts\AttributeContact;
use App\Models\Attribute;

class AttributeRepository extends BaseRepository implements AttributeContact
{


    public function __construct(Attribute $model)
    {
        parent::__construct($model);
        $this->model=$model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listAttributes(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all();
    }
}
