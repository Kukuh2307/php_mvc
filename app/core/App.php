<?php
class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];
    protected $url = [];

    public function __construct()
    {
        $url = $this->parseURL();
        // var_dump($url);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Jika file controller eksis, lakukan instansiasi
            $controllerPath = '../app/controllers/' . ucfirst($url[0]) . '.php';
            if (file_exists($controllerPath)) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }

            // Require file controller
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;

            // Cek metode pada controller
            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Set parameters jika ada
        $this->params = $url ? array_values($url) : [];
        // return $this->params;

        // Panggil metode pada controller dengan parameter
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
