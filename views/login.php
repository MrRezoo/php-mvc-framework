<?php

/**  @var $model \app\models\User */

/** @var $this \app\core\View */

$this->title = 'Login';

?>

<h1>Login Form</h1>
<div align="right " >
    <small><a href="/">back to home</a></small>
</div>

<hr>

<?php $form = \app\core\form\Form::begin('', "post") ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary">Sign in</button>
<lable> or
    <a href="/register" class="btn btn-danger">    create account</a>
</lable>

<?php \app\core\form\Form::end() ?>
