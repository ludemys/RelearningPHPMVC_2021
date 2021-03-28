<?php

require_once './controllers/userController.php';

$controller = new UserController();

$controller->showAll();

$controller->create();