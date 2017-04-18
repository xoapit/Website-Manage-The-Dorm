<?php
   session_start();
    
   //Khai báo utf-8 để hiển thị được tiếng việt
   header('Content-Type: text/html; charset=UTF-8');
   if (isset($_SESSION['username'])) 
   { 
       include('ketnoi.php');
   
   $querydk = mysqli_query($conn,"SELECT * FROM dangky");
   $rowdk=mysqli_fetch_assoc($querydk);
   
   $mssv = $_SESSION['username'];
   $query = mysqli_query($conn,"SELECT * FROM hopdong where mssv='$mssv'");
   if($ro=mysqli_fetch_assoc($query)){
   include('header.php');
   include('menuLogined.php');
   echo "<hr>";
   echo "<h4 style=\"text-align:center\"> BẠN ĐÃ ĐĂNG KÝ PHÒNG: ".$ro['sophong']." KHU NHÀ: ".$ro['khunha']."</h4>";
   echo "<hr>";
   ?>
   <div class="container">
   Thông Tin Thành Viên Phòng:
<table class="table table-striped" style="border-collapse:collapse; border:#666 solid 2px">
   <thead>
      <tr style="background:#09F">
         <th>Họ Và Tên</th>
         <th>Năm Sinh</th>
         <th>Quê Quán</th>
         <th>Khoa</th>
      </tr>
   </thead>
   <tbody>
      <?php
         $query1 = mysqli_query($conn,"SELECT * FROM sinhvien	inner join hopdong on sinhvien.mssv=hopdong.mssv where khunha='".$ro['khunha']."' and sophong='".$ro['sophong']."'");
         while($row = mysqli_fetch_assoc($query1)){
         ?>
      <tr>
         <td><?php echo $row['hovaten'];?></td>
         <td><?php echo substr($row['ngaysinh'],0,4);?></td>
         <td><?php echo $row['noisinh'];?></td>
         <td><?php echo $row['khoa'];?></td>
      </tr>
      <?php }
	  ?>
   </tbody>
</table>
<?php if($rowdk['allowdangky']==0){
		echo "</div><hr>";
	  	include('footer.php');
		exit;
	  }
?>
<form action="" method="post">
   <button name="xoahopdong" class="btn btn-danger btn-block container">Hủy Đăng Ký</button> 
</form>
</div>
<?php
   if(isset($_POST['xoahopdong'])){
   	$query = mysqli_query($conn,"delete FROM hopdong where mssv='$mssv'");
   	header('Location:dangkyphong.php');
   }
   include('footer.php');
   exit;
   }
   
       $query = mysqli_query($conn,"SELECT * FROM phong");
   
   }
   ?>
<?php include('header.php');?>
<?php
   if(isset($_SESSION['username'])) include('menuLogined.php');
   else include('menu2.php');
   
   ?>
<div class="boxtitle text-center" style="background:#d0493b"><span class="glyphicon glyphicon-registration-mark"></span>&#32 ĐĂNG KÝ THUÊ PHÒNG	</div>
<?php
   if (!isset($_SESSION['username'])){
    echo "<hr>";
    echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
    echo "<hr>";
    include('footer.php');
    exit;
   }
   
   $querydk = mysqli_query($conn,"SELECT * FROM dangky");
   $rowdk=mysqli_fetch_assoc($querydk);
   if($rowdk['allowdangky']=='0'){
   		 echo "<hr>";
		echo "<h4>Hiện Tại Không Phải Là Thời Gian Đăng Ký</h4>";
		echo "<hr>";
		include('footer.php');
		exit;
   }
   ?>  
<div class="boxChung container">
   <hr>
   <?php
      if(isset($_POST['chonkhunha'])){
      $chonkhunha=$_POST['chonkhunha'];
      $mssv = $_SESSION['username'];	
      ?>
   <form action="" method="GET" style="margin:1%">
      <tr>
         <h4>KHU NHÀ: <?php echo $chonkhunha;?></h4>
      </tr>
      <br><br>
      <tr>
         <div class="row">
            <?php 
               $query = mysqli_query($conn,"SELECT * FROM phong where khunha='$chonkhunha' and soluongsinhvien<='10' order by sophong asc");
               while($row = mysqli_fetch_assoc($query)){ 
               if($row['sophong']=='101') echo "Tầng 1<hr>" ;
               else if($row['sophong']=='201'){
               echo "
               <div class=\"col-md-4 col-xs-12 phong\">
               <a>
               <div class=\"phongsv\" style=\"border:#fff solid 1px; \">
               <div class=\"svtitle\" style=\"background:none; \">KTX</div>
               2016
               </div>
               </a>
               </div>
               <br>Tầng 2<hr>
               ";
               }
               else if($row['sophong']=='301'){
               echo "
               <div class=\"col-md-4 col-xs-12 phong\">
               <a>
               <div class=\"phongsv\" style=\"border:#fff solid 1px; \">
               <div class=\"svtitle\" style=\"background:none; \">KTX</div>
               2016
               </div>
               </a>
               </div>
               <br>Tầng 3<hr>
               ";
               }
               ?>
            <div class="col-md-2 col-xs-6 phong">
               <a href="<?php if($row['soluongsinhvien']<10) echo "?khunha=".$row['khunha']."&sophong=".$row['sophong'];else echo "#" ?>">
                  <div class="phongsv">
                     <div class="svtitle"><?php echo $row['khunha'].$row['sophong']; ?></div>
                     <?php echo $row['soluongsinhvien']; ?>/10
                  </div>
               </a>
            </div>
            <?php } ?>
         </div>
         </td>
      </tr>
   </form>
   <hr>
   <?php }else if(isset($_GET['khunha'])){
      echo "<h4>Khu Nhà: ".$_GET['khunha']."  Phòng: ".$_GET['sophong']."</h4>";
      ?>
   <form action="hopdongdangky.php" method="post">
      <table class="table table-striped" style="border-collapse:collapse; border:#666 solid 2px">
         <thead>
            <tr style="background:#CCC">
               <th>Họ Và Tên</th>
               <th>Năm Sinh</th>
               <th>Quê Quán</th>
               <th>Khoa</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $_SESSION['khunha']=$_GET['khunha'];
               $_SESSION['sophong']=$_GET['sophong'];
               $query1 = mysqli_query($conn,"SELECT * FROM sinhvien	inner join hopdong on sinhvien.mssv=hopdong.mssv where khunha='".$_SESSION['khunha']."' and sophong='".$_SESSION['sophong']."'");
               while($row = mysqli_fetch_assoc($query1)){
               ?>
            <tr>
               <td><?php echo $row['hovaten'];?></td>
               <td><?php echo substr($row['ngaysinh'],0,4);?></td>
               <td><?php echo $row['noisinh'];?></td>
               <td><?php echo $row['khoa'];?></td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
      <button type="submit" name="" class="btn btn-danger btn-block" style="margin-top:80px">Đăng Ký</button>
      <hr>
   </form>
</div>
<?php }else { ?>
<form action="" method="post">
   <strong style="font-size:24px">Khu Nhà:</strong>
   <select name="chonkhunha" style="width:250px; height:30px">
      <option selected="selected" value="A">A</option>
      <option value="B">B</option>
   </select>
   <button type="submit" class="btn btn-danger btn-block" style="margin-top:80px;padding:10px"><strong>OK</strong></button>
   <hr>
</form>
<?php } ?> 
</div>  
<?php include('footer.php');?>