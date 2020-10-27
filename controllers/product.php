<?php


class product extends Controller
{
    public function __construct()
    {
    }

    public function index($id)
    {
        $product = $this->model->productInfo($id);
        $only_digikala = $this->model->only_digikala();

        $data = [$product , $only_digikala];
        $this->view('product/index',$data);
    }

  
}