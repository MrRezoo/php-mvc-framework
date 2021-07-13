<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;

use app\core\Response;
use app\models\GetPostForm;
use app\models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['create']));
    }


    public function create(Request $request, Response $response)
    {
        $post = new Post();
        if ($request->isPost()) {
            $post->loadData($request->getBody());
            if ($post->validate() && $post->save()) {

                Application::$app->session->setFlash('success', 'Post Created successfully');
                return $response->redirect('/');
            }
        }

        return $this->render('post', [
            'model' => $post
        ]);
    }


    public function getpost(Request $request, Response $response)
    {

        if (key_exists('id', $_GET)) {

            if ($request->isGet()) {

                $post = (new \app\models\Post)->findOne(['id' => $_GET['id']]);
                Application::$app->dd($post);
            } else {
                Application::$app->session->setFlash('error', 'Bad Request');
                return $response->redirect('/');
            }
        }
        Application::$app->session->setFlash('error', 'ID is required');
        return $response->redirect('/');
    }

}