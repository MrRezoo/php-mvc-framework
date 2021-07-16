<?php

/** @var $this \app\core\View */

/** @var $model \app\models\Post */

/** @var $posts Post */
$this->title = 'Posts'

?>

<h1>All Posts</h1>
<?php
foreach ($posts as $post){ ?>
<div class="card h-100" style="width: 18rem; display: inline-block">
    <img src="https://www.djangoproject.com/m/img/logos/django-logo-negative.png" width="250" height="150" class="card-img-op" alt="default">
    <div class="card-body" style="width: 19rem; display: inline-block">
        <h5 class="card-title"><?php echo $post->title ?></h5>
        <p class="card-text"><?php echo substr($post->description, 0, 100).'. . .' ?></p>
        <span class="badge badge-danger"><?php echo $post->subject ?></span>

            <hr>
            <small>
                <?php echo $post->created_at ?>
            </small>
            <hr>
            <?php  echo "<a href=\"post-detail?id=" . $post->id . "\" class='btn btn-primary'>show detail</a>"; ?>
    </div>
</div>
    <?php } ?>