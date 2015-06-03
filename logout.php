<?php

session_start();

$_SESSION['LOGIN'] = false;
header('Location: login.php');
?>