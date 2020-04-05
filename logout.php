<?php
ob_start();
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['user_email']);
unset($_SESSION['user_firstname']);
unset($_SESSION['user_lastname']);
unset($_SESSION['user_role']);

header("Location: index.php");
