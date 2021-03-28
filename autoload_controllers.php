<?php

function autoload_controllers($controllers)
{
    include './controllers/' . $controllers . '.php';
}

spl_autoload_register('autoload_controllers');
