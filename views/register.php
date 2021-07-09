<?php
/**  @var $model \app\models\User */
?>

<h1>Register Form</h1>
<hr>

<?php

$form = \app\core\form\Form::begin('', "post") ?>

    <div class="row">
        <div class="col">
            <?php echo $form->field($model,'first_name')?>
        </div>
        <div class="col">
            <?php echo $form->field($model,'last_name')?>
        </div>
    </div>

    <?php echo $form->field($model,'email') ?>
    <?php echo $form->field($model,'password')->passwordField() ?>
    <?php echo $form->field($model,'confirm_password')->passwordField() ?>

    <button type="submit" class="btn btn-primary">Sign up</button>

<?php \app\core\form\Form::end() ?>
