<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if(isset($_SESSION['username'])){
	include('../ketnoi.php');
	$query = mysqli_query($conn,"SELECT * FROM `hopdong` where thanhtoan=N'Chưa Thanh Toán'");
}

?>


<?php include('../adminquanly/header.php');?>
<?php
 	if(isset($_SESSION['adminquanly'])) include('../menuLogined.php');
	else include('../menu2.php');
 ?>
 <div class="container">
 <div class="boxtitle text-center" style="background:#d0493b">HỦY HỢP ĐỒNG</div>
 <?php
		if (!isset($_SESSION['adminquanly'])){
			echo "<hr>";
		echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
		echo "<hr>";
		exit;
	}
	?>
 <hr>
 	<div class="container jumbotron" style="border-radius:15px;background:#FFF; border:#666 solid 1px; padding:20px;padding-bottom:15px">
        <form action="" method="post">
    	<tr>
             <td><b>Mã Số Sinh Viên:</b></td>
             <td><input type="text" name="txtmssv" value="" maxlength="50" style="width:185px;" /></td>
             <td><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Xác Nhận Mã Số Sinh Viên:</b></td>
             <td><input type="text" name="txtxacnhanmssv" value="" maxlength="50" style="width:185px;" /></td>
         </tr>
     <div class="rowForm text-center " style="margin-bottom:100px; color:#30F;">
     	<?php
			if (isset($_SESSION['adminquanly'])) 
			{ 				
				include('../ketnoi.php');
				
				if (isset($_POST['txtmssv'])&&isset($_POST['txtxacnhanmssv'])) {
					$txtmssv = $_POST['txtmssv'];
					$txtxacnhanmssv = $_POST['txtxacnhanmssv'];
					if($txtmssv == $txtxacnhanmssv){
						$query = mysqli_query($conn,"select * from sinhvien inner join hopdong on sinhvien.mssv=hopdong.mssv where hopdong.mssv='$txtmssv'");
						if($row= mysqli_fetch_assoc($query)){
							$queryup= mysqli_query($conn,"delete from hopdong where mssv='$txtmssv'");	 
							echo "<hr>"."Mã Số Sinh Viên: ".$row['mssv']." Họ Và Tên: ".$row['hovaten']." Khu Nhà: ".$row['khunha']." Số Phòng: ".$row['sophong'];
							echo "<hr> Xác Nhận Thành Công";
							exit;
						}else echo "<hr> Không Tìm Thấy Mã Số Sinh Viên Này. Xin Hãy Kiểm Tra Lại";
					}else echo "<hr> Xác Thực Mã Số Xinh Viên Thất Bại. Xin Hãy Kiểm Tra Lại";
				}
			}
        ?>
     </div>
     <button type="submit" class="btn btn-danger btn-block ">XÁC NHẬN</button>
    </form>
    </div>
    

    <hr>