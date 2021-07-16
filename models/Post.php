<?php


namespace app\models;

use app\core\Application;
use app\core\Model;
use app\core\PostModel;
use app\core\UserModel;

/**
 * Class RegisterModel
 * @package app\models
 */
class Post extends PostModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public string $title = '';
    public string $subject = '';
    public string $slug = '';
    public string $image = '';
    public string $description = '';
    public int $status = self::STATUS_INACTIVE;
    public ?int $user_id = null;


    public function tableName(): string
    {
        return 'posts';
    }


    public function primaryKey(): string
    {
        return 'id';
    }

    public function save()
    {

        $this->status = self::STATUS_INACTIVE;
        $this->user_id = Application::$app->user->id;
        return parent::save();
    }

    public function rules(): array
    {

        return [
            'title' => [self::RULE_REQUIRED, [self::RULE_UNIQUE, 'class' => self::class]],
            'subject' => [self::RULE_REQUIRED],
            'slug' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED],
            'user_id'
        ];
    }


    public function attributes(): array
    {
        return ['title','subject', 'slug', 'image', 'description', 'status','user_id'];
    }


    public function labels(): array
    {
        return [
            'title' => 'Title',
            'subject' => 'Subject',
            'slug' => 'Slug',
            'image' => 'Post Image',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }


    public function get_absolut_url(){

    }

}