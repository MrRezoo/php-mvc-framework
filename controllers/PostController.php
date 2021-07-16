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


    public function getPost(Request $request, Response $response)
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

    public function allPost(Request $request, Response $response)
    {

        if ($request->isGet()) {
            $posts = (new \app\models\Post)->findAll();
            return $this->render('posts', [
                'posts' => $posts
            ]);

        } else {

            Application::$app->session->setFlash('error', '400 | Bad Request');
            return $response->redirect('/');

        }
    }

    public function post_detail(Request $request, Response $response)
    {
        if (key_exists('id', $_GET) && isset($_GET['id']) ) {

            if ($request->isGet()) {

                $post = (new \app\models\Post)->findOne(['id' => $_GET['id']]);
                if ($post) {
                    return $this->render('post_detail', [
                        'post' => $post
                    ]);
                } else {
                    Application::$app->session->setFlash('error', 'post not found');
                    return $response->redirect('/');
                }
            }
        }
        Application::$app->session->setFlash('error', '404 primary key is required');
        return $response->redirect('/');
    }

    public function search(Request $request, Response $response)
    {

        if (key_exists('subject', $_GET) || key_exists('slug', $_GET) || key_exists('title', $_GET) || key_exists('description', $_GET)) {
            if ($request->isGet()) {
                $keys = ['subject', 'slug', 'title', 'description'];
                foreach ($keys as $key) {
                    if (key_exists($key, $_GET)) {

                        $value = '%' . $_GET[$key] . '%';
                        $post = (new \app\models\Post)->search([$key => $value]);
                        Application::$app->dd($post);
                    }
                }

            } else {
                Application::$app->session->setFlash('error', 'Bad Request');
                return $response->redirect('/');
            }
        }
        Application::$app->session->setFlash('error', 'One Column for search is required');
        return $response->redirect('/');
    }
}