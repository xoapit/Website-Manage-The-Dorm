<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if(isset($_SESSION['username'])){
	include('../ketnoi.php');
	
}

?>


<?php include('../adminquanly/header.php');?>
<?php
 	if(isset($_SESSION['adminquanly'])) include('../menuLogined.php');
	else include('../menu2.php');
 ?>
 <div class="container">
 <div class="boxtitle text-center" style="background:#d0493b">TÀI KHOẢN</div>
 <?php
		if (!isset($_SESSION['adminquanly'])){
			echo "<hr>";
		echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
		echo "<hr>";
		exit;
	}
	?>
 <hr>
 	<div class="container jumbotron" style="border-radius:15px;background:#FFF; border:#666 solid 1px; padding:20px;">
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
				include('../ketnoi.php');
				if (isset($_POST['passcu'])&&isset($_POST['passmoi'])&&isset($_POST['passxacnhan'])) {
					$passcu = $_POST['passcu'];
					$passmoi = $_POST['passmoi'];
					$passxacnhan = $_POST['passxacnhan'];
					$query = mysqli_query($conn,"SELECT password FROM quanly where username='".$_SESSION['username']."'");
					$row= mysqli_fetch_assoc($query);
					$pass=$row['password'];
					if(($pass==$passcu)&&($passmoi==$passxacnhan)){
						$queryup= mysqli_query($conn,"update quanly set password='$passmoi' where username='".$_SESSION['username']."'");
						echo "Bạn Đã Đổi Mật Khẩu Thành Công";
					}else echo "Đổi Mật Khẩu Thất Bại";
				}
			}
        ?>
     </div>
     <button type="submit" class="btn btn-danger btn-block " style="padding:10px">Đổi Mật Khẩu</button>
    </form>
    </div>
    

    <hr>