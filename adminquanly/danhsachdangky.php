<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if(isset($_SESSION['username'])){
	include('../ketnoi.php');
	$query = mysqli_query($conn,"select * from hopdong inner join sinhvien on sinhvien.mssv=hopdong.mssv where thanhtoan=N'Chưa Thanh Toán' and khunha='".$_SESSION['adminquanly']."'");
}
?>


<?php include('../adminquanly/header.php');?>
<?php
 	if(isset($_SESSION['adminquanly'])) include('../menuLogined.php');
	else include('../menu2.php');
 ?>
 <div class="container">
 <div class="boxtitle text-center" style="background:#d0493b">DANH SÁCH ĐĂNG KÝ PHÒNG</div>
 <?php
		if (!isset($_SESSION['adminquanly'])){
			echo "<hr>";
		echo "<h4>BẠN CHƯA ĐĂNG NHẬP</h4>";
		echo "<hr>";
		exit;
	}
	?>
 <div class="container  boxChung">
  <table class="table table-striped" style="border-collapse:collapse; border:#666 solid 2px">
    <thead>
      <tr style="background:#CCC">
      	<th>STT</th>
        <th>Mã Hợp Đồng</th>
        <th>Mã Sinh Viên</th>
        <th>Họ Và Tên</th>
        <th>Số Phòng</th>
        <th>Khu Nhà</th>
        <th>Ngày Bắt Đầu</th>
        <th>Ngày Kết Thúc</th>
        <th>Trạng Thái Thanh Toán</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $stt=1;
      while($row = mysqli_fetch_assoc($query)){
    ?>
      <tr>
      	<td><?php echo $stt++;?></td>      	   
        <td><?php echo $row['mahopdong'];?></td>
        <td><?php echo $row['mssv'];?></td>
        <td><?php echo $row['hovaten'];?></td>
        <td><?php echo $row['sophong'];?></td>
        <td><?php echo $row['khunha'];?></td>
        <td><?php echo $row['ngaybatdau'];?></td>
        <td><?php echo $row['ngayketthuc'];?></td>
        <td><?php echo $row['thanhtoan'];?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
	
 </div>
 </div>
 <hr>
 