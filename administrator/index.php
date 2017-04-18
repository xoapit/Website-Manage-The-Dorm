<?php
   //Khai báo sử dụng session
   session_start();
    
   //Khai báo utf-8 để hiển thị được tiếng việt
   header('Content-Type: text/html; charset=UTF-8');
    
   //Xử lý đăng nhập
   if (isset($_POST['dangnhap'])) 
   { 
       include('../ketnoi.php');
   
       $username = addslashes($_POST['txtUsername']);
       $password = addslashes($_POST['txtPassword']);
        
       if (!$username || !$password) {
           header('Location:index.php');
            exit;
       }
        
       //Kiểm tra tên đăng nhập có tồn tại không
       $query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");
       if (mysqli_num_rows($query) == 0) {
        header('Location:index.php');
           exit;
       }
        
       //Lấy mật khẩu trong database ra
       $row = mysqli_fetch_assoc($query);
        
   	if ("admin" != $row['username']) {
        	header('Location:index.php');
          exit;
       }
       //So sánh 2 mật khẩu có trùng khớp hay không
       if ($password != $row['password']) {
        	header('Location:index.php');
          exit;
       }
   	 $_SESSION['hovaten']='Administrator';
   	 $_SESSION['username'] = $username;
   	 $_SESSION['admin']='admin';
   }
   ?>
<?php include('../administrator/header.php');?>
<?php
   if(isset($_SESSION['admin'])) include('../menuLogined.php');
   else include('../menu2.php');
   ?>
<div class="boxChung" style="background:#2c3e50; margin-bottom:0px;">
   <div class="boxtitle" style="margin-top:10px; background:#e74c3c">TRUNG TÂM QUẢN LÝ KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA HÀ NỘI</div>
   <div class="text-center" style="padding-top:3px;color:#FFF; background:url(../image/world.png) no-repeat;">
      <h3>QUẢN LÝ SINH VIÊN NỘI TRÚ</h3>
      <p>Tài Khoản Administrator</p>
      Nhóm Sinh Viên Thực Hiện: 1.Hồ Tá Quý 2.Bùi Viết Toàn 3.Nguyễn Quốc Anh 4.Nguyễn Duy Đạt 5.Võ Quốc Tin 
      <hr style="margin-top:160px">
      <div class="" style="margin-top:10px">
         Địa chỉ : Số 10 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội - Liên hệ: Phòng 101 nhà B Kí Túc Xá sinh viên Bách khoa ĐT: 0438692942. Trường Đại Bách Khóa Hà Nội
         <div class="text-right" style="background:#2c3e50; color:#CCC;padding:10px">Copyright 2016 Team 13T1 BKĐN</div>
      </div>
   </div>
</div>