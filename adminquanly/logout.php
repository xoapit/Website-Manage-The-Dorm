<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
	unset($_SESSION['adminquanly']);
} 
header('Location:index.php');
?>
