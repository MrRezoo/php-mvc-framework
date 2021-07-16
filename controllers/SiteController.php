<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;
use app\models\Post;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{


    public function home(Request $request, Response $response)
    {

        $params = [
            'name' => "Welcome to mvc site",
            'address' => "https://github.com/MrRezoo/php-mvc-framework",
            'all_post'=> 'The section for getting all posts is not complete',
            'one_post' => 'but you can send ID in query string in /getpost route and use FindOne | ORM :)'
        ];

        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                return $response->redirect('/contact');
            }
        }

        return $this->render('contact', [
            'model' => $contact
        ]);
    }


}