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
<div class="boxtitle text-center" style="background:#e74c3c">QUẢN LÝ TIN TỨC VÀ THÔNG BÁO</div>
<?php
		if (!isset($_SESSION['admin'])){
			echo "<hr>";
		echo "<h5>BẠN CHƯA ĐĂNG NHẬP</h5>";
		echo "<hr>";
		exit;
	}
	?>
   <hr>
<div class="container" style="background:#ecf0f1; padding:20px;">
	<?php
	if(isset($_GET['idtheloai'])&&isset($_GET['idtin'])){
	    $idtheloai=$_GET['idtheloai'];
	    $idtin=$_GET['idtin'];  	
		$query = mysqli_query($conn,"select * from tin where idtin='$idtin'");
		$row=mysqli_fetch_assoc($query);
		$noidung=$row['noidung'];
		$tieude=$row['tieude'];	
    }
	
	if(isset($_POST['xoa'])){
	   if($idtin=='1') echo "<h4>Bài Giới Thiệu Không Thể Xóa</h4>";
   	   else{ 
	   		$query = mysqli_query($conn,"delete from tin where idtin='$idtin'");
  			echo "<h4>Xóa Bài Viết Thành Công</h4>";
			header('Location:tintucthongbao.php');
			exit;
	   }
    }
	?>
   <td>Bài Viết: <?php echo $tieude ?> </td>
   <hr>
   <td><h4>Bạn Muốn Xóa Bài Viết Này?</h4></td>
   <hr>
   <form action="" method="post">    
      <hr>
      <hr>
      <hr>
         <button type="submit" name="xoa" class="btn btn-danger btn-block"><strong> Xóa </strong></button>
   </form>
</div>
<hr>
<div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>