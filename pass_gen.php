<?php
// tem way to generate the hashed password to save in database
 
$user = readline("enter the password:");
$hashedPassword = password_hash($user, PASSWORD_BCRYPT);
echo "Plain Password: " . $user . "<br>";
echo "Hashed Password: " . $hashedPassword;
?>