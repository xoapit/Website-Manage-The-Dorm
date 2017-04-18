<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if(isset($_SESSION['username'])){
	
} 
include('../ketnoi.php');
	$query = mysqli_query($conn,"select * from hoadon where khunha='B' order by sophong asc");
	$query1 = mysqli_query($conn,"select khuquanly from nhanvienquanly where khuquanly='B' ");
?> 


<?php include('header.php');?>
<?php
 	if(isset($_SESSION['admin'])) include('../menuLogined.php');
	else include('../menu2.php');
 ?>
 <div class="container">
 <div class="boxtitle text-center" style="background:#d0493b">DANH SÁCH PHÒNG - TIỀN ĐIỆN NƯỚC</div>
 
 <div class="container  boxChung">
  <table class="table table-striped" style="border-collapse:collapse; border:#666 solid 2px">
    <thead>
      <tr style="background:#CCC">
        <th>Khu Nhà</th>
        <th>Số Phòng</th>
        <th>C/S Điện Đầu</th>
        <th>C/S Điện Cuối</th>
        <th>Số Chữ Điện</th>
        <th>Đơn Giá Điện</th>
        <th>Tiền Điện</th>
        <th>C/S Nước Đầu</th>
        <th>C/S Nước Cuối</th>
        <th>Số Chữ Nước</th>
        <th>Đơn Giá Nước</th>
        <th>Tiền Nước</th>
        <th>Tổng Tiền</th>
      </tr>
    </thead>
    <tbody>
    <?php
	$_SESSION["tongsochudien"]=0;
	$_SESSION["tongtiendien"]=0;
	$_SESSION["tongsochunuoc"]=0;
	$_SESSION["tongtiennuoc"]=0;
	$_SESSION["tongtiendiennuoc"]=0;
      while($row = mysqli_fetch_assoc($query)){
    ?>
      <tr>      	
        <td><?php echo $row['khunha'];?></td>
        <td><b><?php echo $row['sophong'];?></b></td>
        
        <td><?php echo $row['chisodiendau'];?></td>
        <td><?php echo $row['chisodiencuoi'];?></td>
        <td><b><?php echo $_SESSION["tongsochudien"]+=$row['chisodiencuoi']-$row['chisodiendau'];?></b></td>
        <td><?php echo $row['dongiadien'];?></td>
        <td><i><?php echo $_SESSION["tongtiendien"]+=($row['chisodiencuoi']-$row['chisodiendau'])*$row['dongiadien'];?></i></td>
        <td><?php echo $row['chisonuocdau'];?></td>
        <td><?php echo $row['chisonuoccuoi'];?></td>
        <td><b><?php echo $_SESSION["tongsochunuoc"]+=$row['chisonuoccuoi']-$row['chisonuocdau'];?></b></td>
        <td><?php echo $row['dongianuoc'];?></td>
        <td><i><?php echo $_SESSION["tongtiennuoc"]+=($row['chisonuoccuoi']-$row['chisonuocdau'])*$row['dongianuoc'];?></i></td>
        <td><b><?php echo $_SESSION["tongtiendiennuoc"]+= (($row['chisodiencuoi']-$row['chisodiendau'])*$row['dongiadien'])+(($row['chisonuoccuoi']-$row['chisonuocdau'])*$row['dongianuoc']);?></b></td>
   
      </tr>
    <?php } ?>
    </tbody>
  </table>
  
  <table class="table table-striped" style="border-collapse:collapse; border:#666 solid 2px">
    <thead>
      <tr style="background:#CCC">
        <th>Khu Nhà</th>             
        <th>Tổng Số Chữ Điện</th>       
        <th>Tổng Tiền Điện</th>        
        <th>Tổng Số Chữ Nước</th>       
        <th>Tổng Tiền Nước</th>
        <th>Tổng Tiền Điện Nước </th>
      </tr>
    </thead>
    <tbody>
    
    <?php
	
      while($row = mysqli_fetch_assoc($query1)){
    ?>
      <tr>     
         <td><?php echo $row['khuquanly'];?></td> 	
        <td><?php echo $_SESSION["tongsochudien"];?></td>
        <td><?php echo $_SESSION["tongtiendien"];?></td>
        <td><?php echo $_SESSION["tongsochunuoc"];?></td>
        <td><?php echo $_SESSION["tongtiennuoc"];?></td>
        <td><?php echo $_SESSION["tongtiendiennuoc"];?></td>
      </tr>
    <?php } ?>
    
    
   
    
    </tbody>
  </table>
 </div>
 </div>
 