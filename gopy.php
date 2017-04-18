<?php
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_SESSION['username'])) 
{   
	function getDateNow() {
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$now = getdate(); 
    	$time = $now["year"] . "/" . $now["mon"] . "/" . $now["mday"] ; 
		return $time;
	} 
     //Kết nối tới database
    include('ketnoi.php');
	

     $query = mysqli_query($conn,"SELECT * FROM gopy");
	if(isset($_POST['tieuDe'])&&isset($_POST['noiDung'])){
		$tieude=$_POST['tieuDe'];
		$noidung=$_POST['noiDung'];
		$mssv = $_SESSION['username'];
		$date = getDateNow();
		
	}
}
?>


<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
	
 ?>
 
 	<div class="boxtitle text-center" style="background:#d0493b"><span class="glyphicon glyphicon-registration-mark"></span><span style="size:4px">&#32 GÓP Ý</span> </h5>	</div> 
    <?php
		if (!isset($_SESSION['username'])){
			echo "<hr>";
		echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
		echo "<hr>";
		include('footer.php');
		exit;
	}
	?>
    <div class="boxChung container">
    <hr>
  <table class="table table-striped" style="border-collapse:collapse; border:#666 solid 2px">
    <div class="col-sm-offset-1 col-sm-10">
            <div class="alert alert-success" role="alert">
                <span>- Các bạn có thể gửi những thắc mắc, góp ý về hoạt động của KTX cũng như Website này tại đây (hoặc có thể gửi đến Email: Team13T1@gmail.com).</span><br>
                <span>- Thông tin cá nhân của các bạn được đảm báo bí mật, và nội dung các bạn gửi lên chỉ có cấp lãnh đạo mới có thể xem được</span><br>
                <span>- Phản hồi của các bạn sẽ được lắng nghe và giải quyết trong thời gian sớm nhất</span><br>
            </div>
            <div class="alert alert-danger" role="alert">
                <span><b>*Chú ý: </b>lời văn nên rỏ ràng, mạch lạc, ngắn gọn, xúc tích, tránh sử dụng các từ ngữ thô tục và thiếu văn hóa</span>
            </div>
        </div>
  </table>
	<hr>
  	<form action="gopyxn.php" method="post" style="margin:1%">
   
    <tr > <div style="border-bottom:solid 3px #5cb85c" ><h4 style="color:#5cb85c; font-weight:500; ">NHẬP NỘI DUNG BẠN CẦN GÓP Ý CHO HỆ THỐNG KTX</h4></div></tr><br><br>
    <span style="color:#F00; font-size:20px "> <b>CHỦ ĐỀ</b> </span> <br><br>
    <input type="text" style="border:solid 2px #5cb85c " name="tieuDe" id="tieuDe" class="form-control" required placeholder="Ví dụ: Góp ý về thái độ làm việc của nhân viên quản lý KTX" /><br />
    <span style="color:#F00; font-size:20px"> <b>NỘI DUNG </b> </span> <br><br>
    <div style="border:solid 2px #5cb85c "><textarea  class="ckeditor"  required="" name="noiDung" id="noiDung" rows="15" placeholder="Nội dung cần góp ý"></textarea></div>
  	 <input type="submit" value="Góp ý" class="btn btn-danger btn-block"  style="margin-top:20px"/>
  </form> 
  <hr>        

    </div>
</div>

<?php include('footer.php');?>



    