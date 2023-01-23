<?php
session_start();
if(!isset($_SESSION["admin"])){
	header("Location: ../index.php");
}

unset($_SESSION['admin']);
header('location:../index.php'); //direct ke index.php

?>