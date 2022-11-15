<?php
session_start();
$hostname = 'http://localhost/Apex_skrim_calc/';
if(!$_SESSION['user']) {
	header('Location: '.$hostname);
	exit();
}