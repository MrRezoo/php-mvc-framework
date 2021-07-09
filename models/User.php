<?php


namespace app\models;

use app\core\DbModel;
use app\core\Model;

/**
 * Class RegisterModel
 * @package app\models
 */
class User extends DbModel
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $password = '';
    public string $confirm_password = '';


    public function tableName(): string
    {
        return 'users';
    }


    public function register()
    {
        return $this->save();
    }

    public function rules(): array
    {
        return [
            'first_name' => [self::RULE_REQUIRED],
            'last_name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirm_password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }


    public function attributes(): array
    {
        return ['first_name', 'last_name', 'email', 'password'];
    }


}