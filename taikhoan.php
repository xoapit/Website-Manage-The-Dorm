<?php
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
?>

<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
 ?>
 <div class="boxtitle text-center" style="background:#d0493b">TÀI KHOẢN</div> 
 <?php
		if (!isset($_SESSION['username'])){
		echo "<hr>";
		echo "<h4> BẠN CHƯA ĐĂNG NHẬP </h4>";
		echo "<hr>";
		include('footer.php');
		exit;
	}
	?>
	<hr>
 	<div class="container" style="background:#FFF; border:#666 solid 1px; padding:20px;">
    Đổi Mật Khẩu Tài Khoản:
    <hr>
        <form action="" method="post">
    	<tr>
             <td><b>Mật Khẩu Cũ:</b></td>
             <td><input type="password" name="passcu" value="" maxlength="50" style="width:185px;" /></td>
             <td><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Mật Khẩu Mới:</b></td>
             <td><input type="password" name="passmoi" value="" maxlength="50" style="width:185px;" /></td>
             <td><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Xác Nhận Mật Khẩu:</b></td>
             <td><input type="password" name="passxacnhan" value="" maxlength="50" style="width:185px;" /></td>    
         </tr>
     <div class="rowForm text-center " style="margin-bottom:100px; color:#30F;">
     	<?php
			if (isset($_SESSION['username'])) 
			{   
				 //Kết nối tới database
				include('ketnoi.php');
				if (isset($_POST['passcu'])&&isset($_POST['passmoi'])&&isset($_POST['passxacnhan'])) {
					$passcu = $_POST['passcu'];
					$passmoi = $_POST['passmoi'];
					$passxacnhan = $_POST['passxacnhan'];
					$query = mysqli_query($conn,"SELECT password FROM sinhvien where mssv='".$_SESSION['username']."'");
					$row= mysqli_fetch_assoc($query);
					$pass=$row['password'];
					if(($pass==$passcu)&&($passmoi==$passxacnhan)){
						$queryup= mysqli_query($conn,"update sinhvien set password='$passmoi' where mssv='".$_SESSION['username']."'");
						echo "Bạn Đã Đổi Mật Khẩu Thành Công";
					}else echo "Đổi Mật Khẩu Thất Bại";
				}
			}
        ?>
     </div>
     <button type="submit" class="btn btn-danger btn-block ">Đổi Mật Khẩu</button>
    </form>
    <hr>
    </div>
    

    <hr>
    <?php include('footer.php'); ?>






    