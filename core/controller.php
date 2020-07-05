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


}


?>