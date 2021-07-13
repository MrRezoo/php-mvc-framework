<?php


namespace app\models;


use app\core\Application;
use app\core\Model;

class LoginForm extends Model
{

    public string $email = '';
    public string $password= '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
          'email' => 'Your email',
          'password' => 'Password',

        ];
    }

    public function login()
    {
        # change as User::findOne(['email' => $this->email]);
        $user = (new User)->findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'User does not exist with this email');
            return false;
        }

        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }

        Application::$app->session->setFlash('success','You login successfully');
        return Application::$app->login($user);
    }


}