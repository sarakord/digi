<?php


class Index extends Controller
{

    function __construct()
    {
        //echo 'we are in index controller!<br>';
    }

    function index()
    {


        $this->view('index/index');

    }


}


?>