<?php


class App
{

    public $controler = 'index';
    public $method = 'index';
    public $params = array();


    function __construct()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = $this->parseUrl($url);
            $this->controler = $url[0];
            unset($url[0]);
            if (isset($url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }

            $this->params = array_values($url);
        }
        $controlerUrl = 'controllers/' . $this->controler . '.php';
        if (file_exists($controlerUrl)) {
            require($controlerUrl);
            $object = new $this->controler;

            if (method_exists($object, $this->method)) {
                $arr = array($object, $this->method);
                call_user_func_array($arr, $this->params);
            }
        }


    }

    function parseUrl($url)
    {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        return $url;
    }

}


?>