<?php

class Panel extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('panel/index');
    }
}

?>