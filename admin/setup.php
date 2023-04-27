<?php


require_once('./classes/class.UserDB.php');

$userDB = new UserDB();
$user = new User();

$user->first_name = "Barrak";
$user->last_name = "Samer";
$user->email = "barrak@gmail.com";
$user->password = password_hash("12345", PASSWORD_DEFAULT);

$userDB->insertAsObject($user);
