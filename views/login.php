<?php
/**  @var $model \app\models\User */
?>

<h1>Login Form</h1>
<hr>

<?php $form = \app\core\form\Form::begin('', "post") ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary">Sign in</button>

<?php \app\core\form\Form::end() ?>
