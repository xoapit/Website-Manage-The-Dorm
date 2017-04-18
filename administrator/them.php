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
<div class="boxtitle text-center" style="background:#e74c3c">QUẢN LÝ TIN TỨC VÀ THÔNG BÁO</div>
<?php
   if (!isset($_SESSION['admin'])){
   	echo "<hr>";
   echo "<h5>BẠN CHƯA ĐĂNG NHẬP</h5>";
   echo "<hr>";
   exit;
   }
   ?>
<hr>
<div class="container" style="background:#ecf0f1; padding:20px;">
   <?php
      if(isset($_POST['them'])){
          $tieude=$_POST['tieude'];
          $idtheloai=$_POST['idtheloai'];
      	$noidung=$_POST['noidung'];
      	$image=$_POST['image'];
        		$query = mysqli_query($conn,"insert into `tin` (tieude,idtheloai,noidung,image,anhien) values('$tieude','$idtheloai','$noidung','$image','1')");
       		echo "<h4>Thêm Bài Viết Mới Thành Công</h4>";
         }
      ?>
   Thêm Bài Viết Mới:
   <form action="" method="post">
      <tr>
         <td>Tiêu Đề: </td>
         <td> <input type="text" name="tieude" value="" required style="color:Black;width:100%;font-size:18px"/></td>
      </tr>
      <hr style="margin:5px;">
      <tr>
         <td>URL Image: </td>
         <td> <input type="text" name="image" value="" style="color:Black;width:30%;font-size:18px"/></td>
         <td>Thể Loại: </td>
         <select name="idtheloai" style="width:150px;height:25px;">
            <option selected="selected" value="2">Thông Báo</option>
            <option value="3">Tin Tức</option>
         </select>
         <button type="submit" name="them" class="btn btn-danger"><strong>Thêm</strong></button>
      </tr>
      <hr>
      <textarea name="noidung" id="editor1" rows="10" cols="80">
      
      </textarea>
      <script>          
         CKEDITOR.replace( 'editor1' );
      </script>
   </form>
</div>
<hr>
<div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>