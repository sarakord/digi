<?php

class Search extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('search/index');
    }
}

?>