<?php
session_start();
include('ketnoi.php');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

	if (!isset($_SESSION['username'])){
		echo "<hr>";
		echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
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
     //Kết nối tới database
    include('ketnoi.php');
	$query = mysqli_query($conn,"SELECT gia FROM phong where khunha='".$_SESSION['khunha']."'");
		$row=mysqli_fetch_assoc($query);
		$gia=$row['gia'];	

	$mssv = $_SESSION['mssv'];
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
    $query = mysqli_query($conn,"SELECT * FROM hopdong where mssv='$mssv'");
	$row = mysqli_fetch_assoc($query);
	$khunha=$row['khunha'];
	$sophong=$row['sophong'];
	$mssv = $row['mssv'];
	$date = getDateNow();
	$month = strtotime(date("Y-m-d", strtotime($date)) . " +3 month");
	$month = strftime("%Y-%m-%d", $month);
	$query = mysqli_query($conn,"update hopdong set ngaylap='$date',ngaybatdau='$date',ngayketthuc='$month',thanhtoan=N'Chưa Thanh Toán' where mssv='$mssv'");
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
    	<div class="row text-center font" style="color:#000;margin:30px; font-size:30px" >ĐĂNG KÝ GIA HẠN PHÒNG</div>
   		<div class="row text-right">Ngày Đăng Ký: <?php echo $_SESSION['date'];?></div>
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

        <div class="col-xs-6 text-center">Người Đăng Ký</div>
        <div class="col-xs-6 text-center">Thu Ngân</div>
    </div>
    <hr>
    <div class="text-center">(*) In phiếu này thành 2 bản. Vui lòng thanh toán trong vòng 3 ngày kể từ ngày đăng ký gia hạn.
    <input type="button" class="btn btn-danger text-right" id="print_button"  value="Print" onclick="this.style.display ='none'; window.print()" />
    </div>
</body>





    