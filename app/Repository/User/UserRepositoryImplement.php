<?php

namespace App\Repository\User;

use App\Models\User;

class UserRepositoryImplement implements UserRepository
{
private $model;

public function __construct(User $model)
{
    $this->model = $model;
}



public function getByUserId($id)
{
    return $this->model->where("id", $id)->get();
}

 /**
     * get data user by email
   * @param $email
   * @return mixed
*/

public function getByUserEmail($email)
{
    return $this->model->where("email", $email)->get();
}

/**
     * get data user by email
   * @param $name
   * @return mixed
*/

public function getByUserName($username)
{
    return $this->model->where("username", $username)->get();
}



}