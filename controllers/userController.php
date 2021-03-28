<?php

class UserController
{
    public function create()
    {
        require_once './views/user/create.php';
    }

    public function update()
    {

    } 

    public function delete()
    {

    }

    public function showAll()
    {
        require_once './models/user.php';

        $user = new User();

        require_once './views/user/showAll.php';
    }
}