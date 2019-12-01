<?php

namespace App\Contracts;
interface BaseContracts
{

    /**
     * create model and instances;
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * update models instance
     * @param array $attributes
     * @param int $id
     * @return mixed
     */
    public function update(array $attributes, int $id);


    /**
     * return all data oderBy id and sortBy decs
     * @param array $columns
     * @param string $oderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = ['*'], string $oderBy = 'id', string $sortBy = 'desc');


    /**
     * Find on By ID
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * find by id or throw exception
     * @param int $id
     * @return mixed
     */
    public function findOrFail(int $id);


    /**
     * find one based on a different column
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data);

    /**
     * find one based a different column or Throw exception
     * @param array $data
     * @return mixed
     */
    public function findOnBy(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function findOnByOrFail(array $data);

    /**
     * Delete by id
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

}
