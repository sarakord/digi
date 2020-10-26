<?php


class product extends Controller
{
    public function __construct()
    {
    }

    public function index($id)
    {
        $product = $this->model->productInfo($id);


        $data = [$product];
        $this->view('product/index',$data);
    }

  
}