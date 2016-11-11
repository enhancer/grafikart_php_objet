<?php

require 'Form.php';

$form = new Form($_POST);

?>

<form action="#" method="POST">
   
    <?php
    $form->input('username');
    $form->input('password');
    $form->submit();
    ?>
</form>

