<?php


namespace app\core;


/**
 * Class View
 *
 * @author Mr.Rezoo <rezam578@gmail.com>
 * @package app\core
 */
class View
{
    public string $title = '';


    public function renderView($view, $params = [])
    {
        $viewContent = $this->renderOnlyView($view, $params);
        $layoutContent = $this->layoutContent();

        /** search and replace '{{content}}' placeholder inside layout replace it with the view content  */
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();

        /** search and replace '{{content}}' placeholder inside layout replace it with the view content  */
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        $layout = Application::$app->layout;
        if (Application::$app->controller) {
            $layout = Application::$app->controller->layout;
        }
        ob_start(); // starting caching
        include_once Application::$ROOT_DIR . "/views/layouts/$layout.php";
        return ob_get_clean(); // clear the buffer
    }

    protected function renderOnlyView($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start(); // starting caching
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean(); // clear the buffer
    }
}