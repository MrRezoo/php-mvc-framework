<?php


namespace app\models;

use app\core\DbModel;
use app\core\Model;
use app\core\UserModel;

/**
 * Class RegisterModel
 * @package app\models
 */
class User extends UserModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public int $status = self::STATUS_INACTIVE;
    public string $password = '';
    public string $confirm_password = '';


    public function tableName(): string
    {
        return 'users';
    }


    public function primaryKey(): string
    {
        return 'id';
    }

    public function save()
    {
        $this->status = self::STATUS_INACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(): array
    {
        return [
            'first_name' => [self::RULE_REQUIRED],
            'last_name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirm_password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }


    public function attributes(): array
    {
        return ['first_name', 'last_name', 'email', 'status', 'password'];
    }


    public function labels(): array
    {
        return [
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Your Email',
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',

        ];
    }

    public function getDisplayName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}