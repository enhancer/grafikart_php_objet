<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

<?php

use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;
use \Tutoriel;
require 'Class/Autoloader.php';

Autoloader::register();



$form = new BootstrapForm($_POST);

var_dump(\Tutoriel\Text::withZero(4));


?>

<form action="#" method="POST">
   
    <?php
    $form->input('username');
    $form->input('password');
    $form->submit();
    ?>
</form>


</body>
