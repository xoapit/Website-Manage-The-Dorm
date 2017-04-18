<?php
   session_start();
   header('Content-Type: text/html; charset=UTF-8');
   ?>
<?php
   include('../ketnoi.php');
   if(isset($_GET['anhien'])){
	   $anhien=$_GET['anhien'];
	   $idtin=$_GET['idtin'];
	   if($anhien==1) $anhien=0;
	   else $anhien=1;
	   	$sql="update tin set anhien='$anhien' where idtin='$idtin' ";
  		$query = mysqli_query($conn,$sql);
   }
  
   function gettttb($conn){
   	 $query = mysqli_query($conn,"SELECT * FROM tin order by idtheloai asc");
   	 return $query;
   }
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
   	 <h3>Danh Sách Tin Tức Và Thông Báo
     <a href="them.php" class="btn btn-danger" style="float:right"> Thêm </a>
     </h3>
     <hr>
      <div class="" style="border:#999 solid 1px;">
         <table class="table table-striped" style="border-collapse:collapse; ">
            <thead>
               <tr style="background:#3498db">
               	  <th>STT</th>
                  <th>ID Thể Loại</th>
                  <th>Thể Loại</th>
                  <th>ID Tin</th>
                  <th>Tiêu Đề</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                  <th>Ẩn/Hiển</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = gettttb($conn);
				  $stt=1;
                    while($row = mysqli_fetch_assoc($query)){
                   ?>
               <tr>
               	  <td><?php echo $stt++;?></td>
                  <td><?php echo $row['idtheloai'];?></td>
                  <td>
				  <?php 
				  	if($row['idtheloai']==2) echo "Thông Báo";
					else if($row['idtheloai']==3) echo "Tin Tức";
					else echo "Giới Thiệu";
				  ?></td>
                  <td><?php echo $row['idtin'];?></td>
                  <td><?php echo $row['tieude'];?></td>
                  <td><a href="<?php echo "sua.php?idtheloai=".$row['idtheloai']."&idtin=".$row['idtin'];?>">Sửa </a></td>
                  <td><a href="<?php echo "xoa.php?idtheloai=".$row['idtheloai']."&idtin=".$row['idtin'];?>">Xóa </a></td>
                  <td><a href="<?php echo "?anhien=".$row['anhien']."&idtheloai=".$row['idtheloai']."&idtin=".$row['idtin'];?>">
                  <?php if($row['anhien']==0) echo "Ẩn"; else echo "Hiện" ?>
                  </a></td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
  <hr>
  <div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>