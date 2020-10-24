<?php

class Controller
{
    function __construct()
    {

    }

    function view($viewUrl)
    {

        require('header.php');
        require('views/' . $viewUrl . '.php');
        require('footer.php');
      

    }

    function model($modelUrl)
    {

        require('models/model_'.$modelUrl.'.php');
        $classname='model_'.$modelUrl;
        $this->model = new $classname;

    }


}


?>