<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $register_model = new RegisterModel();
        if ($request->isPost()) {
            $register_model->loadData($request->getBody());


            if ($register_model->validate() && $register_model->register()) {
                return 'Success';
            }

            return $this->render('register', [
                'model' => $register_model
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $register_model
        ]);
    }
}