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
			$_SESSION['tieuDe']=$tieude;
			$noidung=$_POST['noiDung'];
			$_SESSION['noiDung']=$noidung;
			$mssv = $_SESSION['username'];
			$hovaten = $_SESSION['hovaten'];
			$date = getDateNow();
			$_SESSION['date']=$date;
			$queryy = mysqli_query($conn," insert into `gopy`  (hoten,tieude,noidung,thoigian) values(N'$hovaten',N'$tieude',N'$noidung','$date')");
		}
    
		
	
}
?>


<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
	
 ?>
 
 	<div class="boxtitle text-center" style="background:#d0493b"><span class="glyphicon glyphicon-registration-mark"></span><span style="size:4px">&#32 GÓP Ý</span> </h5>	</div> 
   

    <div class="boxChung container">
    
  	<div class="row">
            <div class="col-sm-offset-1 col-sm-10" style="border-bottom:solid 3px #5cb85c"><center><h4 style="color:#5cb85c;">CÁC GÓP Ý BẠN ĐÃ GỬI</h4></center></div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10" align="center" >
                <table class="table table-bordered table-hover">
                    <tr>
                        
                        <th>Chủ đề</th>
                        <th>Nội dung</th>
                        <th>Thời gian gửi</th>
                        
                        
                    </tr>
                        <tr>
                            <td><?php echo $_SESSION['tieuDe'];?></td>
                            <td><?php echo $_SESSION['noiDung'];?></td>
                            <td><?php echo $_SESSION['date'];?></td>
                            
                        </tr>
                   
                </table>
                <div class="row">
                 <tr>
                        <td colspan="4">Những góp ý đã được lãnh đạo đọc sẽ được phản hồi qua email của bạn</td>
                    </tr>
                </div>
            </div>
        </div>

  <hr>        




    </div>
</div>

<?php include('footer.php');?>



    