<?php

/** @var $exception Exception */

?>

<div class="d-flex justify-content-center align-items-center" id="main">
    <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center"> <?php echo $exception->getCode() ?> </h1>
    <div class="inline-block align-middle">
        <h2 class="font-weight-normal lead" id="desc">  <?php echo $exception->getMessage() ?> </h2>
    </div>
</div>