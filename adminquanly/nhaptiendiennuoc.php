<?php 
       session_start();
	   date_default_timezone_set('Asia/Ho_Chi_Minh');
		function getDateNow() {
			$now = getdate(); 
	    	$time = $now["year"] . "/" . $now["mon"] . "/" . $now["mday"] ; 
			return $time;
		} 
?>


<?php include('header.php');?>
<?php
 	if(isset($_SESSION['adminquanly'])) {
			include('../menuLogined.php');
		}
	else include('../menu2.php');
 ?>
 <div class="container">
 <div class="boxtitle text-center" style="background:#d0493b">NHẬP HÓA ĐƠN ĐIỆN NƯỚC</div>
 <hr>

<?php
		if (!isset($_SESSION['adminquanly'])){
			echo "<hr>";
		echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
		echo "<hr>";
		exit;
	}
	?>
     	<div class="container jumbotron" style="border-radius:15px;background:#FFF; border:#666 solid 1px; padding:20px;padding-bottom:15px">
        <form action="nhaptiendiennuoc.php" method="post">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            	<tr>
                                    <td>Số phòng:</td>
                				
                                    <td> <input type="text" name = "sophong" maxlength="10" style="color:Black;width:150px;font-size:13px"/ required></td>
                                    
                                    <td>Thời Gian:</td>
                                    <td> <input type="text" size="16" name = "thangghiso" 
                                    value="<?php echo getDateNow(); ?>"  style="color:Black;width:150px;height: 26px;;font-size:13px"/ required></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                	
                                    <td>Chỉ số điện:</td>
                                    <td> <input type="number" name = "chisodien" maxlength="10" style="color:Black;width:150px;font-size:13px"/ required></td>
                                    
                                    <td>Chỉ số nước:</td>
                                    <td> <input type="number" name = "chisonuoc" maxlength="10" style="color:Black;width:150px;font-size:13px"/ required></td>
                                </tr>
                             </table>
                             <div class="rowForm text-center " style="margin-bottom:100px; color:#30F;">
									<?php
                                        if (isset($_SESSION['username'])) 
                                        { 				
                                            include('../ketnoi.php');
                                          {
												if (isset($_POST['sophong'])&&isset($_POST['chisodien'])&&isset($_POST['chisonuoc'])){
                                                $sophong = $_POST['sophong']; // Phong phai co trong Hop Dong ???
											
												$chisodien = $_POST['chisodien'];
												
												$chisonuoc = $_POST['chisonuoc'];
												$thangghiso = $_POST['thangghiso'];
												$query= mysqli_query($conn,"select * from hoadon where khunha='".$_SESSION['adminquanly']."' and sophong='$sophong'");
												
												$row=mysqli_fetch_assoc($query);
												$khunha=$row['khunha'];
												$sophong=$row['sophong'];
												$chisodiencuoi=$row['chisodiencuoi'];
												$chisonuoccuoi=$row['chisonuoccuoi'];
                                                $queryup= mysqli_query($conn,"update hoadon set chisodiencuoi='$chisodien',chisonuoccuoi='$chisonuoc',chisodiendau='$chisodiencuoi', chisonuocdau='$chisonuoccuoi',thangghiso='$thangghiso' where khunha='$khunha' and sophong='$sophong'");
												echo "<hr> Xác Nhận Thành Công";
												
                                                
												}    
                                            }
                                        }
                                    ?>
                                 </div> 
                             <button type="submit" name="nhapgia" class="btn btn-primary btn-block">Submit</button>
                       </div>
                  </form>
    </div>
    <hr>