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
 <div class="boxtitle text-center" style="background:#d0493b">CẬP NHẬT GIÁ ĐIỆN NƯỚC</div>
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
            <td>
            </select>
            <strong>Khu Nhà:</strong>
            <select name="chonkhunha" style="width:53px;">
                     <option value=''><?php echo $_SESSION['adminquanly']; ?></option>
            </select>
        	</td>
             <td><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Giá Điện:</b></td>
             <td><input type="number"  required name="giadien" value="" maxlength="10" style="width:185px;" /> VND/1 chỉ số</td>
             </td>
             <td><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Giá Nước:</b></td>
             <td><input type="number"  required name="gianuoc" value="" maxlength="10" style="width:185px;" /> VND/1 chỉ số</td>
         </tr>
     <div class="rowForm text-center " style="margin-bottom:100px; color:#30F;">
     	<?php
			if (isset($_SESSION['adminquanly'])) 
			{ 				
				include('../ketnoi.php');
				
				if (isset($_POST['giadien'])&&isset($_POST['gianuoc'])) {
					
					$giadien = $_POST['giadien'];
					$gianuoc = $_POST['gianuoc'];
					$queryup= mysqli_query($conn,"update hoadon set dongiadien='$giadien',dongianuoc='$gianuoc' where khunha='".$_SESSION['adminquanly']."'");	 
					echo "<hr> Xác Nhận Thành Công";
						
				}
			}
        ?>
     </div>
     <button type="submit" class="btn btn-danger btn-block ">XÁC NHẬN</button>
    </form>
    </div>
    

    <hr>