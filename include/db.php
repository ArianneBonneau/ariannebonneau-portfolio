<?php

session_start();
error_reporting(0);
$db = mysqli_connect('localhost', 'root', '', 'my-portfolio') or die("database not connected!");

?>