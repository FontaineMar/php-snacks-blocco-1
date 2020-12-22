<?php
$nome = $_GET["name"];
$email = $_GET["mail"];
$eta = $_GET["age"];

$emails = str_split($email);
var_dump($emails);
?>
<h1>
  <?php
    if (strlen($nome) > 3 && in_array('@', $emails) && in_array('.' , $emails) && is_numeric($eta)){
      echo 'accesso riuscito';
    }
    else{
      echo 'accesso negato';
    }
 ?></h1>
