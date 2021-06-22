<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{


    public function home()
    {
        $params = [
            'name' => "welcome to our MVC site"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request )
    {
       $body = Application::$app->request->getBody();

                echo '<pre>';
                var_dump($body);
                echo '<pre>';
                exit;
        return "handling Submitted data";
    }

}