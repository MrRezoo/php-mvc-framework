<?php

namespace app\core;

/**
 * Class Router
 * @package app\core
 */
class Router
{
    /**
     * @var Request
     */
    public Request $request;
    public Response $response;
    protected array $routes = [];

    /**
     * Router constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            $controller = new $callback[0];
            $callback[0] = $controller;

        }

        return call_user_func($callback);

    }

    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);

        /** search and replace '{{content}}' placeholder inside layout replace it with the view content  */
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        ob_start(); // starting caching
        include_once Application::$ROOT_DIR . "/views/layouts/main.php";
        return ob_get_clean(); // clear the buffer
    }

    protected function renderOnlyView($view)
    {
        ob_start(); // starting caching
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean(); // clear the buffer
    }
}