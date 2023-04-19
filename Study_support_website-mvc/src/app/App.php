<?php
class App
{
    private $__controller;
    private $__action;
    private $__params;

    public function __construct()
    {
        global $routes;

        $this->__controller = $routes['default_controller'].'Controller';
        $this->__action = 'index';
        $this->__params = [];

        $this->handleUrl();
    }

    public function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }

        return $url;
    }

    private function __loadControllerUrl(&$urlArr)
    {
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]).'Controller';
            unset($urlArr[0]);
        }
        $controllerPath = 'app/controllers/'.($this->__controller).'.php';
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
            } else {
                $this->loadError(404);
            }
        } else {
            $this->loadError(404);
        }
    }

    private function __loadActionUrl(&$urlArr)
    {
        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }
        if (!method_exists($this->__controller, $this->__action)) {
            $this->loadError(404);
        }
    }

    public function handleUrl()
    {
        $url = $this->getUrl();
        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        $this->__loadControllerUrl($urlArr);

        $this->__loadActionUrl($urlArr);
        
        $this->__params = array_values($urlArr);
    
        call_user_func_array([$this->__controller, $this->__action], $this->__params);
    }
    
    public function loadError($name)
    {
        echo file_get_contents('app/errors/'.$name.'.php');
        exit();
    }
}
