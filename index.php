<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 

//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{    
	
     //Kết nối tới database
    include('ketnoi.php');
    
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        header('Location:index1.php');
         exit;
    }
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn,"SELECT * FROM hopdong right join sinhvien on sinhvien.mssv=hopdong.mssv WHERE sinhvien.mssv='$username'");
    if (mysqli_num_rows($query) == 0) {
     header('Location:index1.php');
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_assoc($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
     	header('Location:index1.php');
       exit;
    }
	
	 $hovaten=$row['hovaten'];
	 $lop=$row['lop'];
	 $khoa=$row['khoa'];
	 $mssv=$username;
	 $email=$row['email'];
	 $gioitinh=$row['gioitinh'];
	 $ngaysinh=$row['ngaysinh'];
	 $cmnd=$row['cmnd'];
	 $dantoc=$row['dantoc'];
	 $noisinh=$row['noisinh'];
	 $quoctich=$row['quoctich'];
	 $sdt=$row['sdt'];
	 $khunha=$row['khunha'];
	 $sophong=$row['sophong'];
	
	 $_SESSION['lop']=$lop;
	 $_SESSION['khoa']=$khoa;
	 $_SESSION['mssv']=$mssv;
	 $_SESSION['username']=$mssv;
	 $_SESSION['hovaten'] = $hovaten;
	 $_SESSION['gioitinh'] =$gioitinh ;
	 $_SESSION['ngaysinh'] =$ngaysinh ;
	 $_SESSION['email'] = $email;
	 $_SESSION['cmnd'] = $cmnd;
	 $_SESSION['dantoc'] = $dantoc;
	 $_SESSION['noisinh'] = $noisinh;
	 $_SESSION['quoctich'] = $quoctich;
	 $_SESSION['sdt'] = $sdt;
	 $_SESSION['khunha'] = $khunha;
	 $_SESSION['sophong'] = $sophong;    
   
	header('Location:Thongtinsinhvien.php');
    die();
}

if(isset($_SESSION['admin'])){
	 unset($_SESSION['admin']);
	unset($_SESSION['username']);
}
if(isset($_SESSION['adminquanly'])){
	 unset($_SESSION['adminquanly']);
	 unset($_SESSION['username']);
}
?>


<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
 ?>
<?php include('bodyleft.php');?>

        <div class="col-md-9">
            <div class="khunggiua">
            <?php include('bodytintuc.php');?>

            </div>
        </div>
    </div>

<?php include('footer.php');?>



    