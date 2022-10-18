<?php
session_start();
if(!$_SESSION['user']) {
	header('Location: /Apex_skrim_calc/index.php');
	exit();
}