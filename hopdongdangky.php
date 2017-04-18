<?php
	session_start();
	include('ketnoi.php');
	//Khai báo utf-8 để hiển thị được tiếng việt
	header('Content-Type: text/html; charset=UTF-8');
	
	if (!isset($_SESSION['username'])){
		echo "<hr>";
		echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
		echo "<hr>";
   		exit;
   }
	
	$querydk = mysqli_query($conn,"SELECT * FROM dangky");
    $rowdk=mysqli_fetch_assoc($querydk);
    if($rowdk['allowdangky']=='0'){
   		 echo "<hr>";
		echo "<h4>Hiện Tại Không Phải Là Thời Gian Đăng Ký</h4>";
		echo "<hr>";
		exit;
    }
	
	//Xử lý đăng nhập
	if (isset($_SESSION['username'])) 
	{   
		
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		function getDateNow() {
			$today = date('Y-m-d');
			return $today;
		} 
	    
	
	    $query = mysqli_query($conn,"SELECT gia FROM phong where khunha='".$_SESSION['khunha']."'");
		$row=mysqli_fetch_assoc($query);
		$gia=$row['gia'];
		
		$mssv = $_SESSION['username'];
		$query = mysqli_query($conn,"SELECT * FROM hopdong where mssv='$mssv'");
		if(mysqli_num_rows($query)==1){
			include('header.php');
			include('menuLogined.php');
			echo "<hr>";
			echo "<h4 style=\"text-align:center\"> BẠN ĐÃ ĐĂNG KÝ RỒI. KHÔNG THỂ ĐĂNG KÝ LẦN NỮA</h4>";
			echo "<hr>";
			include('footer.php');
			exit;
		}
		
		$querykt = mysqli_query($conn,"SELECT * FROM hopdong where mssv='".$_SESSION['mssv']."'");
		if(isset($_SESSION['username'])&&(mysqli_num_rows($querykt)==0)){
			$mssv = $_SESSION['username'];
			$date = getDateNow();
			$_SESSION['date']=$date;
			$month = strtotime(date("Y-m-d", strtotime($date)) . " +3 month");
			$month = strftime("%Y-%m-%d", $month);
			$queryy = mysqli_query($conn," insert into `hopdong`  (mssv,khunha,sophong,ngaylap,ngaybatdau,ngayketthuc,thanhtoan) values('$mssv','".$_SESSION['khunha']."','".$_SESSION['sophong']."','$date','$date','$month',N'Chưa Thanh Toán')");
		}
	}
	
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>KTX Bách Khoa Hà Nội</title>
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/slide.css">
	</head>
	<body>
    	
		<hr>
		<div class="container jumbotron" style="border-radius:15px;background:#FFF; border:#666 solid 1px; padding:95px;padding-top:10px; ">
			<h5>KÍ TÚC XÁ ĐẠI HỌC BÁCH KHOA HÀ NỘI</h5>
			<div class="row text-center font" style="color:#000;margin:30px; font-size:30px" >ĐĂNG KÝ THUÊ PHÒNG</div>
			<div class="row text-right">Ngày Đăng Ký: <?php echo $_SESSION['date'];?></div>
			<tr>Họ Và Tên: <?php echo $_SESSION['hovaten']; ?></tr>
			<br>
			<tr>Mã Số Sinh Viên: <?php echo $_SESSION['mssv']; ?></tr>
			<tr>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
				Lớp: <?php echo $_SESSION['lop']; ?>
			</tr>
			<br>
			<tr>Khu Nhà Ở: <?php echo $_SESSION['khunha']; ?></tr>
			<tr>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
				Số Phòng: <?php echo $_SESSION['sophong']; ?>
			</tr>
			<br>
			Mức Phí: <?php  
				echo $gia." VND/1tháng x 3 = ".($gia*3)." VND";
				?></tr><br>
			<tr>Số Điện Thoại: <?php echo $_SESSION['sdt']; ?></tr>
			<br>
			<br>        
			<tr>Họ Và Tên Cha (Mẹ):.................................................................................................................</tr>
			<br>
			<tr>Địa Chỉ Thường Trú:..................................................................................................................</tr>
			<br>
			<tr>Số Điện Thoại Gia Đình:.................................................................</tr>
			<br><br>
			<div class="col-xs-6 text-center">Người Đăng Ký</div>
			<div class="col-xs-6 text-center">Thu Ngân</div>
		</div>
		<hr>
		<div class="text-center">(*) In phiếu này thành 2 bản. Vui lòng thanh toán trong vòng 3 ngày kể từ ngày đăng ký.
        <input type="button" class="btn btn-danger text-right" id="print_button"  value="Print" onclick="this.style.display ='none'; window.print()" />
        </div>
	</body>