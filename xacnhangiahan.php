<?php
 session_start();
 
 header('Content-Type: text/html; charset=UTF-8');
 $date ="";
 
		
//Xử lý đăng nhập
if (isset($_SESSION['username'])) 
{   
	function getDateNow() {
		$today = date('Y-m-d');  
		return $today;
	} 
     //Kết nối tới database
    include('ketnoi.php');
	$query = mysqli_query($conn,"SELECT gia FROM phong where khunha='".$_SESSION['khunha']."'");
		$row=mysqli_fetch_assoc($query);
		$gia=$row['gia'];

	$mssv = $_SESSION['username'];
    $query = mysqli_query($conn,"SELECT * FROM hopdong where mssv='$mssv'");
	if(mysqli_num_rows($query)==0){
		include('header.php');
		include('menuLogined.php');
		echo "<hr>";
		echo "<h4 style=\"text-align:center\"> BẠN CHƯA ĐĂNG KÝ </h4>";
		echo "<hr>";
		include('footer.php');
		exit;
	}
	$row = mysqli_fetch_assoc($query);
	$khunha=$row['khunha'];
	$sophong=$row['sophong'];
	$mssv = $_SESSION['username'];
	$date = getDateNow();
}

?>
<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
 ?>
 <div class="boxtitle text-center" style="background:#d0493b">ĐĂNG KÝ GIA HẠN PHÒNG	</div> 
 	<?php
		if (!isset($_SESSION['username'])){
		echo "<hr>";
		echo "<h4> BẠN CHƯA ĐĂNG NHẬP </h4>";
		echo "<hr>";
		include('footer.php');
		exit;
		}
		$querydk = mysqli_query($conn,"SELECT * FROM dangky");
		$rowdk=mysqli_fetch_assoc($querydk);
		if($rowdk['allowgiahan']=='0'){
			echo "<hr>";
			echo "<h4>Hiện Tại Không Phải Là Thời Gian Gia Hạn Phòng</h4>";
			echo "<hr>";
			include('footer.php');
			exit;
    	}
	?>
	<hr>
 	<div class="container jumbotron" style="border-radius:15px;background:#FFF; border:#666 solid 1px; padding:95px;padding-top:10px; ">
        <h5>KÍ TÚC XÁ ĐẠI HỌC BÁCH KHOA HÀ NỘI</h5>
    	<div class="row text-center font" style="color:#000;margin:30px; font-size:30px" >ĐĂNG KÝ GIA HẠN PHÒNG</div>
   		<div class="row text-right">Ngày Đăng Ký: <?php echo $date;?></div>
        <tr>Họ Và Tên: <?php echo $_SESSION['hovaten']; ?></tr><br>
        <tr>Mã Số Sinh Viên: <?php echo $_SESSION['mssv']; ?></tr>
        <tr>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
        Lớp: <?php echo $_SESSION['lop']; ?>
        </tr><br>
        <tr>Khu Nhà Ở: <?php echo $khunha; ?></tr>
        <tr>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
        Số Phòng: <?php echo $sophong; ?></tr><br>
        Mức Phí: <?php  
				echo $gia." VND/1tháng x 3 = ".($gia*3)." VND";
				?></tr><br>
        <tr>Số Điện Thoại: <?php echo $_SESSION['sdt']; ?></tr><br>

        <div class="col-md-6 text-center">Người Đăng Ký</div>
        <div class="col-md-6 text-center">Thủ Quỹ</div>
    </div>
    <div class="container">
    <form action="hopdonggiahan.php" method="post">
     <button type="submit" class="btn btn-danger btn-block ">Xác Nhận</button>
    </form>
    </div>
    <hr>
    <?php include('footer.php'); ?>






    