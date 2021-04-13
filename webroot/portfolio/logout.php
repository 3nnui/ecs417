<?php

session_start();

$_SESSION = array();

unset($_SESSION['email']);
unset($_SESSION['option']);
unset($_SESSION['add']);
unset($_SESSION['status']);
unset($_SESSION['add']);


//  destroy the session.
session_destroy();

header("location: portfolio.html");
?>
