<?php
session_start();

if(!isset($_SESSION['username'])){
	header("location:index.php");
}else{
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	unset($_SESSION['fullname']);
	header("location:index.php");
}