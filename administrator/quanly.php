<?php
   session_start();
   header('Content-Type: text/html; charset=UTF-8');
   include('../ketnoi.php'); 
   ?>
<?php include('../administrator/header.php');?>
<?php
   if(isset($_SESSION['admin'])) include('../menuLogined.php');
   else include('../menu2.php');
   ?>
<div class="" style="background:#2c3e50">
<div class="boxtitle text-center" style="background:#e74c3c">TÀI KHOẢN QUẢN LÝ KHU NHÀ</div>
<?php
   if (!isset($_SESSION['admin'])){
   	echo "<hr>";
   echo "<h5>BẠN CHƯA ĐĂNG NHẬP</h5>";
   echo "<hr>";
   exit;
   }
   ?>
<?php
   if(isset($_POST['them'])){
   	$username=$_POST['username'];
   	$password= $_POST['password'];
   	$password2= $_POST['password2'];
   	$tennhanvienquanly= $_POST['tennhanvienquanly'];
   	$sodienthoai= $_POST['sodienthoai'];
   	$khunha=$_POST['khunha'];
   	if($password==$password2)
   		$query = mysqli_query($conn,"insert into quanly (username,password,khunha,tennhanvienquanly,sodienthoai) values('$username','$password','$khunha','$tennhanvienquanly','$sodienthoai')");
   	else echo "<h5>Xác Thực Mật Khẩu Không Chính Xác</h5>";
   }
   	
   if(isset($_GET['xoausername'])){
   	$username=$_GET['xoausername'];		
   	$query = mysqli_query($conn,"delete from quanly where username='$username'");
     }
   
     function gettttb($conn){
    $query = mysqli_query($conn,"SELECT * FROM quanly");
    return $query;
     }
    ?>
<hr>
<div class="container" style="background:#ecf0f1; padding:20px;">
   
   <form action="" method="post">
      <table class="table">
         <tr>
            <td>Tên Tài Khoản: </td>
            <td> <input type="text" name="username" value="" required style="color:Black;width:120px;font-size:18px"/></td>
            <td> Mật Khẩu: </td>
            <td> <input type="password" name="password" value="" required style="color:Black;width:100px;font-size:18px"/></td>
            <td> Xác Thực Mật Khẩu: </td>
            <td> <input type="password" name="password2" value="" required style="color:Black;width:100px;font-size:18px"/></td>
         </tr>
         <tr>
            <td>Họ Và Tên: </td>
            <td> <input type="text" name="tennhanvienquanly" value="" required style="color:Black;width:120px;font-size:18px"/></td>
            <td> Số Điện Thoại: </td>
            <td> <input type="text" name="sodienthoai" value="" required style="color:Black;width:100px;font-size:18px"/></td>
            <td>Khu Nhà Quản Lý: </td>
            <td> <input type="text" name="khunha" value="" required style="color:Black;width:100px;font-size:18px"/></td>
         </tr>
         <tr>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
             <td>
            </td>
            <td>
               <button type="submit" name="them" class="btn btn-danger" style="width:100px;"> Thêm </button>
            </td>
         </tr>
      </table>
   </form>
   <hr>
   <h6>Danh Sách Tài Khoản Quản Lý:</h6>
   <div class="" style="border:#999 solid 1px;">
      <table class="table table-striped" style="border-collapse:collapse; ">
         <thead>
            <tr style="background:#3498db">
               <th>Username</th>
               <th>Họ Tên</th>
               <th>Password</th>
               <th>Số ĐT</th>
               <th>Khu Nhà Quản Lý</th>
               <th>Xóa</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $query = gettttb($conn);
                  while($row = mysqli_fetch_assoc($query)){
                ?>
            <tr>
               <td><?php echo $row['username'];?></td>
               <td><?php echo $row['tennhanvienquanly'];?></td>
               <td><?php echo $row['password'];?></td>
               <td><?php echo $row['sodienthoai'];?></td>
               <td><?php echo $row['khunha'];?></td>
               <td><a href="<?php echo "?xoausername=".$row['username'];?>">Xóa </a></td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</div>
<hr>
<div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>