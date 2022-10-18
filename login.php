<?php
session_start();
include('connect.php');
 
if(empty($_POST['user']) || empty($_POST['pass'])) {
	header('Location: /Apex_skrim_calc/account.php');
	exit();
}
 
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
 
$query = "select user from users where user = '{$user}' and pass = md5('{$pass}')";
 
$result = mysqli_query($conn, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['user'] = $user;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: /Apex_skrim_calc/index.php');
	exit();
}