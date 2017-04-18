<?php
   session_start();
   header('Content-Type: text/html; charset=UTF-8');
   include('../ketnoi.php'); 
   ?>
<?php include('../administrator/header.php');?>
<?php
   if(isset($_SESSION['admin'])) include('../menuLogined.php');
   else include('../menu2.php');
   ?>
<div class="" style="background:#2c3e50">
   <div class="boxtitle text-center" style="background:#e74c3c">ĐÓNG/MỞ LINK ĐĂNG KÝ/GIA HẠN PHÒNG</div>
   <?php
		if (!isset($_SESSION['admin'])){
			echo "<hr>";
		echo "<h5>BẠN CHƯA ĐĂNG NHẬP</h5>";
		echo "<hr>";
		exit;
	}
	?>
    <?php	 	
		
       $query = mysqli_query($conn,"SELECT * FROM dangky");
    	if($row = mysqli_fetch_assoc($query));
		
		if(isset($_GET['dangky'])){
			$dangky=$row['allowdangky'];
			$dangky=($dangky+1)%2;
			$query = mysqli_query($conn,"update dangky set allowdangky='$dangky'");
	   }
	   if(isset($_GET['giahan'])){
			$giahan=$row['allowgiahan'];		
			$giahan=($giahan+1)%2;
			$query = mysqli_query($conn,"update dangky set allowgiahan='$giahan'");
	   }
	   
	   $query = mysqli_query($conn,"SELECT * FROM dangky");
    	if($row = mysqli_fetch_assoc($query));
   ?>
   <hr>
   <div class="container" style="background:#ecf0f1; padding:20px;">
     <hr>
      <div class="" style="border:#999 solid 1px; margin:20px; padding:30px;">
      	 <div class="text-right">Now: <?php
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$today = date('h:i:s A d-m-Y');
			echo $today;
		 ?></div>
       
              <div class=""><h4>Link Đăng Ký Đang: <?php if($row['allowdangky']==1) echo "Mở "; 
			  else echo "Đóng "; ?>
              <a class="btn btn-danger" href="?dangky=0"><?php if($row['allowdangky']==0) echo " Mở Link Đăng Ký"; 
			  else echo " Đóng Link Đăng Ký"; ?></a>
              </h4>
              </div>
              <div class=""><h4>Link Gia Hạn Đang: <?php if($row['allowgiahan']==1) echo "Mở "; 
			  else echo "Đóng "; ?>
              <a class="btn btn-danger" href="?giahan=0"><?php if($row['allowgiahan']==0) echo " Mở Link Gia Hạn"; 
			  else echo " Đóng Link Gia Hạn"; ?></a>
              </h4>
              </div>
   
      </div>
   </div>
  <hr>
  <div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>