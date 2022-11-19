<?php
function logout() {
    session_start();
    session_destroy();
    header('Location: http://localhost/Apex_skrim_calc/account');
    exit();
}
?>