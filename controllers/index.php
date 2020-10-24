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
       $slider2 = $this->model->getSlider2();
       $only_digikala = $this->model->only_digikala();
       $most_viewed = $this->model->most_viewed();
       $last_products = $this->model->last_product();

       $slider2_items = $slider2[0];
       $end_time = $slider2[1];

       $data = [$slider1 , $slider2_items , $end_time ,$only_digikala , $most_viewed , $last_products];
       $this->view('index/index',$data);

    }


}


?>