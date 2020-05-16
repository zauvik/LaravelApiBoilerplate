<?php

namespace App\Repositories;

/**
 * -------------------------------
 * Repository Class Standard
 * -------------------------------
 * Please implements all repository 
 * using this interface
 * 
 */

interface RepositoryInterface
{
    //show all collection
    public function all();

    //show document by id
    public function show($id);

    //show collection/document by condition
    public function condition($rules, $first);

    //insert single record
    public function store($request);

    //insert multiple record
    public function bulkStore($request);
}
