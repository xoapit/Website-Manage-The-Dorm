<?php
   //Khai báo sử dụng session
   session_start();
    
   //Khai báo utf-8 để hiển thị được tiếng việt
   header('Content-Type: text/html; charset=UTF-8');
    
   //Xử lý đăng nhập
   if (isset($_POST['dangnhap'])) 
   {    
   	
        //Kết nối tới database
       include('../ketnoi.php');
       
       //Lấy dữ liệu nhập vào
       $username = addslashes($_POST['txtUsername']);
       $password = addslashes($_POST['txtPassword']);
        
       //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
       if (!$username || !$password) {
           header('Location:index.php');
            exit;
       }
        
       //Kiểm tra tên đăng nhập có tồn tại không
       $query = mysqli_query($conn,"SELECT * FROM quanly WHERE username='$username'");
       if (mysqli_num_rows($query) == 0) {
        header('Location:index.php');
           exit;
       }
        
       //Lấy mật khẩu trong database ra
       $row = mysqli_fetch_assoc($query);
        
       //So sánh 2 mật khẩu có trùng khớp hay không
       if ($password != $row['password']) {
        	header('Location:index.php');
          exit;
       }
   	 $_SESSION['hovaten']=$row['tennhanvienquanly'];
   	 $_SESSION['username'] = $username;
   	 $_SESSION['adminquanly']=$row['khunha'];
   }
   ?>
<?php include('../adminquanly/header.php');?>
<?php
   if(isset($_SESSION['adminquanly'])) include('../menuLogined.php');
   else include('../menu2.php');
   ?>
<div class="boxChung" style="background:#34495e; margin-bottom:0px;">
	 <div class="boxtitle" style="margin-top:10px">TRUNG TÂM QUẢN LÝ KÝ TÚC XÁ BÁCH KHOA HÀ NỘI</div>
   <div class="container">
      <div class="jumbotron text-center" style="padding:20px; margin-top:20px;">
         <h3>QUẢN LÝ SINH VIÊN NỘI TRÚ</h3>
         <p>Tài Khoản Admin Khu Nhà</p>
         <tr>Thực Tập Công Nhân - Nhóm Phát Triển Team 13T1-DUT</tr>
         <tr>1. Hồ Tá Quý</tr>
         <td>2. Bùi Viết Toàn</td>
         <td>3. Nguyễn Duy Đạt</td>
         <td>4. Nguyễn Quốc Anh</td>
         <td>5. Võ Quốc Tin</td>
         <div class="" style="margin-top:80px">Địa chỉ : Số 10 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội - Liên hệ: Phòng 101 nhà B9 kí túc xá sinh viên Bách khoa ĐT: 0438692942. Trường Đại Bách Khóa Hà Nội</div>
      </div>
   </div>
    <div class="text-right" style="background:#2c3e50; color:#CCC;padding:10px">Copyright 2016 Team 13T1 BKĐN</div>
    </div>