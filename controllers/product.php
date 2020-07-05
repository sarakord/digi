<?php


class product extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('product/index');
    }
}