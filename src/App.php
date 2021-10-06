<?php

namespace MyFrame;

use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use Http\HttpRequest;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use function FastRoute\simpleDispatcher;

class App
{
    protected $dispatcher;
    protected $routeInfo;
    protected $request;
    protected $twig;
    protected $routes;

    public function __construct(array $routes)
    {
        xxx
        $this->routes = $routes;
        $routeDefinitionCallback = function (RouteCollector $r) {
            foreach ($this->routes as $route) {
                $r->addRoute($route[0], $route[1], $route[2]);
            }
        };

        $this->request = new HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);;
        $this->dispatcher = simpleDispatcher($routeDefinitionCallback);
        $this->routeInfo = $this->dispatcher->dispatch($this->request->getMethod(), $this->request->getPath());

        $load = new FilesystemLoader(dirname(__DIR__) . "/src/resources/views/");
        $this->twig = new Environment($load, [
            'cache' => dirname(__DIR__) . '/src/vars/caches/'
        ]);
    }

    public function init()
    {
        switch ($this->routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                $this->twig->display('errors/404.twig');
                break;
            case Dispatcher::METHOD_NOT_ALLOWED:
                $this->twig->display('errors/405.twig');
                break;
            case Dispatcher::FOUND:
                $className = $this->routeInfo[1][0] ?? null;
                $method = $this->routeInfo[1][1] ?? null;
                $vars = $this->routeInfo[2] ?? null;
                try {
                    $check = true;
                    if(!empty($vars)){
                        $middleware = new Middleware();
                        $check = call_user_func_array(array($middleware, $vars),null);
                    }
                    if(!$check){
                        $this->twig->display('errors/403.twig');
                    }else {
                        $class = new $className;
                        array_unshift($vars, $this->request);
                        call_user_func_array(array($class, $method), $vars);
                    }
                }
                catch (\Exception $exception){
                    $this->twig->display('errors/405.twig');
                }
                break;
        }
    }
}