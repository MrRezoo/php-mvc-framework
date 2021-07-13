<?php

/** @var $this \app\core\View */

/** @var $model Post */

use app\core\form\SelectField;
use app\core\form\TextareaField;
use app\models\Post;

$this->title = 'Contact'

?>

<h1>create post</h1>

<?php $form = \app\core\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'title') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'slug') ?>
<?php echo new SelectField($model, 'status', ['Active', 'Inactive'], [Post::STATUS_ACTIVE, Post::STATUS_INACTIVE]) ?>
<?php echo $form->field($model, 'image')->fileField() ?>
<?php echo new TextareaField($model, 'description') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end(); ?>

