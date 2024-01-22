<?php

namespace core;

class App
{

    public function __construct()
    {

        Db::getInstance();

        require_once APP . "/view/Main/index.php";
    }

}