<?php
session_start();
include('connect.php');
 
$hostname = 'http://localhost/Apex_skrim_calc/';


if(empty($_POST['user']) || empty($_POST['pass'])) {
	$target = 'account';
	header('Location: '.$hostname.$target);
	exit();
}
 
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
 
$query = "select user from users where user = '{$user}' and pass = md5('{$pass}')";
 
$result = mysqli_query($conn, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['user'] = $user;
	$target = 'painel';
	header('Location: '.$hostname.$target);
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	$target = 'account';
	header('Location: '.$hostname.$target);
	//header('Location: http://localhost/Apex_skrim_calc/'.$target);
	exit();
}
?>