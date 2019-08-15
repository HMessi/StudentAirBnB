<?php
session_start();
session_destroy();
unset($_SESSION['fullname']);
header('Location: index.php');
?>