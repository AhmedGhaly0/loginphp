<?php

session_start();

$username = 'ahmed';
$password = '0000';


if($username == $_POST['username'] && $password == $_POST['password']){
    $_SESSION['userdata'] = $_POST['username'];
    header('LOCATION:home.php');
}else{
    header('LOCATION:index.html');
}