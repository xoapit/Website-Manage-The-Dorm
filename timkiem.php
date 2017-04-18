<?php session_start(); ?>
<?php include('ketnoi.php'); ?>
<?php include('header.php');?>
<?php
 	
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
 ?>

        <div class="col-xs-12 col-md-12" style="padding-left: 55px;padding-right: 56px;">              
                <div class="boxThongtinsinhvien">
                   <div class="boxtitle" style="text-align:center">
                       <span>Thông tin Sinh Viên</span>
                    </div>
                  <div class ="boxtintuc">
                      <form action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-bordered" >
                            	<tr style="text-align:center">
                                	<th >Mssv</th>
                                	<th >Họ và tên</th>
                                    <th >Khoa</th>
                                    <th >Số Điện Thoại</th>
                                    <th >Khu</th>
                                    <th >Số Phòng</th>
                                </tr>
                                
                                <?php
									if(isset($_POST['tim'])){
									$timkiem = $_POST['timkiem'];
									$sql="select * from hopdong right join sinhvien on sinhvien.mssv=hopdong.mssv where sinhvien.mssv = '$timkiem'";
									$query1=mysqli_query($conn,$sql);
									if(mysqli_num_rows($query1) != 0)
										$sql="select * from hopdong right join sinhvien on sinhvien.mssv=hopdong.mssv where sinhvien.mssv = '$timkiem'";
									else	
										$sql="select * from hopdong right join sinhvien on sinhvien.mssv=hopdong.mssv where sinhvien.hovaten =N'$timkiem'";
									$query=mysqli_query($conn,$sql);
							     if(mysqli_num_rows($query) == 0) echo 'KHÔNG TÌM THẤY SINH VIÊN';
								else{
								while($row=mysqli_fetch_assoc($query)){
								
							
								?>
                                <tr>
                                  <td><?php echo $row['mssv']; ?></td>
                                  <td><?php echo $row['hovaten']; ?></td>
                                  <td><?php echo $row['khoa']; ?></td>
                                  <td><?php echo $row['sdt']; ?></td>
                                  <td><?php echo $row['khunha']; ?></td>
                                  <td><?php echo $row['sophong']; ?></td>
                                </tr>
                           
                             	<?php }}}?>
                                                       
                  </form>
             </div> <!-- boxtintuc --> 
        </div>
        <!-- /.container -->    </div>
<div class="row" style="margin-bottom:10px">
</div>

<script src="bootstrap/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

    