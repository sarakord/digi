<?php


class Index extends Controller
{

    function __construct()
    {
        //echo 'we are in index controller!<br>';
    }

    function index()
    {

       $slider1 = $this->model->getSlider1();
       $this->view('index/index',$slider1);

    }


}


?>