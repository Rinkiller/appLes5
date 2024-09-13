<?php

namespace Geekbrains\Application1;

class Application {

    private const APP_NAMESPACE = 'Geekbrains\Application1\Controllers\\';

    private string $controllerName;
    private string $methodName;

    public function run() : string {
        // echo "<pre>";
        // print_r($_SERVER);
        // echo phpversion();
        $routeArray = explode('/', $_SERVER['REQUEST_URI']);

        if(isset($routeArray[1]) && $routeArray[1] != '') {
            $controllerName = $routeArray[1];
        }
        else{
            $controllerName = "page";
        }

        $this->controllerName = Application::APP_NAMESPACE . ucfirst($controllerName) . "Controller";

        if(class_exists($this->controllerName)){
            // пытаемся вызвать метод
            if(isset($routeArray[2]) && $routeArray[2] != '') {
                $methodName = $routeArray[2];
            }
            else {
                $methodName = "index";
            }

            $this->methodName = "action" . ucfirst($methodName);

            if(method_exists($this->controllerName, $this->methodName)){
                $controllerInstance = new $this->controllerName();
                return call_user_func_array(
                    [$controllerInstance, $this->methodName],
                    []
                );
            }
            else { 
                $this->controllerName = Application::APP_NAMESPACE . "HendlerController";
                $this->methodName = "actionIndex";
                $controllerInstance = new $this->controllerName();
                header("HTTP/1.1 404 Not Found");
                return call_user_func_array(
                    [$controllerInstance, $this->methodName],
                    []
                );
            }
        }
        else{
            $render = new Render();
            $this->controllerName = Application::APP_NAMESPACE . "HendlerController";
            $this->methodName = "actionIndex";
            $controllerInstance = new $this->controllerName();
            header("HTTP/1.1 404 Not Found");
            return call_user_func_array(
                [$controllerInstance, $this->methodName],
                []
            );
        }
    }

    public function render(array $pageVariables) {
        
    }
}