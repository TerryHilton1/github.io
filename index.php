<?php
require_once('login.php')

$lifetime = 60 * 60 * 24 * 365 * 4;
session_set_cookie_params($lifetime, '/');
session_start();


if (empty($_SESSION['email'])) { $_SESSION['email'] = array(); }

?>