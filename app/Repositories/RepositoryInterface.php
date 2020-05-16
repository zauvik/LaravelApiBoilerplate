<?php
namespace App\Repositories;

/**
 * Repository Class Standard
 * 
 * Please implements all classes 
 * using this interface
 * 
 */

 interface RepositoryInterface{
     //show all collection
     public function all();

     //show document by id
     public function show($id);

     //show collection/document by condition
     public function condition($rules, $first);
 }