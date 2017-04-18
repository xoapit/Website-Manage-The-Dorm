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
                       <span>Thông tin nhân viên</span>
                    </div>
                  <div class ="boxtintuc">
                      <form action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-bordered" >
                            	<tr style="text-align:center">
                                	<th >STT</th>
                                	<th >Họ và tên</th>
                                    <th >Chức vụ</th>
                                    <th >Số điện thoại</th>
                                    <th >Nhiệm vụ</th>
                                </tr>
                                <?php
									$sl= mysqli_query($conn,"Select * from nhanvien");
        							while($row = mysqli_fetch_assoc($sl))
									{
								?>
                                <tr>
                                  <td><?php echo $row['manhanvien']; ?></td>
                                  <td><?php echo $row['hovaten']; ?></td>
                                  <td><?php echo $row['chucvu']; ?></td>
                                  <td><?php echo $row['sodienthoai']; ?></td>
                                  <td><?php echo $row['nhiemvu']; ?></td>
                                </tr>
                             	<?php }?>
                             </table>                          
                  </form>
             </div> <!-- boxtintuc --> 
        </div>
        <!-- /.container -->    
        </div>
</div>
<hr>
<?php include('footer.php');?>

    