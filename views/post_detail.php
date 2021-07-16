<?php

use app\models\Post;

/** @var $this \app\core\View */

/** @var $model \app\models\Post */

/** @var $post Post */


$this->title = 'Posts'

?>

<h1> <?php echo $post->title; ?> </h1>

<div class="bg-light p-5 rounded-lg m-3">

    <h3 class="display-4">
        <?php echo $post->title; ?>
    </h3>
    <br>
    <img src="https://www.djangoproject.com/m/img/logos/django-logo-negative.png"  alt="pic_path">
    <br>
    <br>
    <p><?php  echo $post->description; ?></p>
    <span class="badge badge-danger"><?php echo $post->subject ?></span>
    <br>
    <small><?php echo $post->created_at;   ?></small>
    <br>
    <br>
    <a class="btn btn-primary " href="posts" role="button">back</a>
</div>



