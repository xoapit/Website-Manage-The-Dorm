<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
	unset($_SESSION['mssv']); 
	unset($_SESSION['hovaten']); 
} 
header('Location:index.php');
?>
