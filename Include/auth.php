<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION["auth"] != 1) {
    header("Location: login.php");
    exit();
}
