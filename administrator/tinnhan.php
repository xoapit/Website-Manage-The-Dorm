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
   <div class="boxtitle text-center" style="background:#e74c3c">THƯ GÓP Ý</div>
   <?php
		if (!isset($_SESSION['admin'])){
			echo "<hr>";
		echo "<h5>BẠN CHƯA ĐĂNG NHẬP</h5>";
		echo "<hr>";
		exit;
	}
	?>
    <?php
			 	
		if(isset($_GET['xoaid'])){
			$xoaid=$_GET['xoaid'];		
			$query = mysqli_query($conn,"delete from gopy where id='$xoaid'");
	   }
		
	   function gettttb($conn){
		 $query = mysqli_query($conn,"SELECT * FROM `gopy`");
		 return $query;
	   }
   ?>
   <hr>
   <div class="container" style="background:#ecf0f1; padding:20px;">
   	 <h6>Danh Sách Tin Nhắn:</h6>
     <hr>
      <div class="" style="border:#999 solid 1px;">
         <table class="table table-striped" style="border-collapse:collapse; ">
            <thead>
               <tr style="background:#3498db">
                  <th>From</th>
                  <th>Chủ Đề</th>
                  <th>Nội Dung</th>
                  <th>Thời Gian</th>
                  <th>Xóa</th>
                  <th>Xem</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = gettttb($conn);
                     while($row = mysqli_fetch_assoc($query)){
                   ?>
               <tr>
                  <td><?php echo $row['hoten'];?></td>
                  <td><?php echo $row['tieude'];?></td>
                  <td><?php echo substr($row['noidung'],0,400);?></td>
                  <td><?php echo $row['thoigian'];?></td>
                  <td><a href="<?php echo "?xoaid=".$row['id'];?>">Xóa </a></td>
                  <td><a href="<?php echo "?xemid=".$row['id'];?>">Xem </a></td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
      <?php
		  if(isset($_GET['xemid'])){
				$xemid=$_GET['xemid'];		
				$query = mysqli_query($conn,"select * from gopy where id='$xemid'");
				$row = mysqli_fetch_assoc($query);
      ?>  
      	  <hr>
          <tr>From:<?php echo $row['hoten'];?> </tr>
          <hr style="margin:5px;"> 
          <tr> Nội Dung: </tr>
             <textarea class="form-control" placeholer="Message" rows="10"><?php echo $row['noidung'];?></textarea>
  		<?php } ?>
   </div>
  <hr>
  <div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>