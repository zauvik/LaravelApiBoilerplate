<?php

namespace App\Repositories;

/**
 * -----------------------------------------
 * Repository
 * -----------------------------------------
 * Please implements all depedency class 
 * using this interface
 * 
 */

use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * -----------------------------------------
     * Select all
     * -----------------------------------------
     * @return collection
     * 
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * -----------------------------------------
     * Select all
     * -----------------------------------------
     * @param int $id
     * 
     * @return document
     * 
     */
    public function show($id)
    {
        return $this->model->where('id', $id)->first();
    }

    /**
     * -----------------------------------------
     * Select by some rule
     * -----------------------------------------
     * @param array $rules
     * @param boolean $first
     * 
     * @return document|collection
     * 
     */
    public function condition($rules, $first = false)
    {
        if (is_bool($first)) {
            if ($first = true)
                return $this->model->where($rules)->first();
            else
                return $this->model->where($rules)->get();
        }
        else
            throw new \Exception ('Bad in second parameter, please ensure the second variable has bool value. Set true if you wanna get first record instead of all record. The default is false');
    }

    /**
     * -----------------------------------------
     * Insert single record to table
     * -----------------------------------------
     * @param array $request
     * 
     * @return document
     * 
     */
    public function store($request)
    {
        return $this->model->create($request);
    }

    /**
     * -----------------------------------------
     * Insert multiple new record to table
     * -----------------------------------------
     * @param array $request
     * 
     * @return bool
     * 
     */
    public function bulkStore($request)
    {
        return $this->model->insert($request);
    }
}
