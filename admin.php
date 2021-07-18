<?php

$Nume = 'admin';
$passwordA = '123';

$Username = $_POST['n'];
$Password = $_POST['p'];


if($Nume == $Username && $Password == $passwordA)
{
    echo "next";
    header('Location: admin_users.php');
}
else{
  echo "Ai gresit parola sau Nickname";
}


?>