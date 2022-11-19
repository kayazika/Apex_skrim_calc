<?php
//session_start();

if($_SESSION['user']) {
	header('Location: http://localhost/Apex_skrim_calc/painel');
	exit();
}

?>