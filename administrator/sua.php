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

   <hr>
<div class="container" style="background:#ecf0f1; padding:20px;">
	<?php
	if(isset($_GET['idtheloai'])&&isset($_GET['idtin'])){
	    $idtheloai=$_GET['idtheloai'];
	    $idtin=$_GET['idtin'];  	
		$query = mysqli_query($conn,"select * from tin where idtin='$idtin'");
		$row=mysqli_fetch_assoc($query);
		$noidung=$row['noidung'];
		$tieude=$row['tieude'];
		$image=$row['image'];	
    }
	
	if(isset($_POST['luu'])){
	    $tieude=$_POST['tieude'];
		$noidung=$_POST['noidung'];
		$image=$_POST['image'];
   		$query = mysqli_query($conn,"update `tin` set tieude=N'$tieude',noidung=N'$noidung',image='$image' where idtin='$idtin'");
  		echo "<h4>Lưu Bài Viết Thành Công</h4>";
    }
	?>
   Sửa Bài Viết:
   <form action="" method="post">
      <tr>
         <td>Tiêu Đề: </td>
         <td> <input type="text" name="tieude" value="<?php echo $tieude ?>" style="color:Black;width:100%;font-size:18px"/>      </td>
      </tr>
      <hr style="margin:5px;">
      <tr>
      	<td>URL Image: </td>
         <td> <input type="text" name="image" value="<?php echo $image ?>" style="color:Black;width:30%;font-size:18px"/></td>
          <td>Thể Loại: </td>
         <td> <input type="text" name="tieude" value="<?php 
				  	if($row['idtheloai']==2) echo "Thông Báo";
					else if($row['idtheloai']==3) echo "Tin Tức";
					else echo "Giới Thiệu";
				  ?>" readonly disabled="disable" style="color:Black;width:20%;font-size:12px"/>      </td>
         <button type="submit" name="luu" class="btn btn-danger"><strong> Lưu Thay Đổi</strong></button>
      </tr>
      <hr>
      <textarea name="noidung" id="editor1" rows="10" cols="80">
           <?php echo $noidung; ?> 
      </textarea>
      <script>          
         CKEDITOR.replace( 'editor1' );
      </script>
   </form>
</div>
<hr>
<div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>