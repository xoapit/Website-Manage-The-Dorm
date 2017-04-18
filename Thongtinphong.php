<?php session_start();?> 
<?php include('ketnoi.php'); ?>
<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
 ?>


        <div class="col-xs-12 col-md-12" style="padding-left: 55px;padding-right: 56px;">              
                <div class="boxThongtinsinhvien">
                   <div class="boxtitle" style="text-align:center">
                       <span>Thông tin phòng</span>
                    </div>
                  <div class ="boxtintuc">
                      <form action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-bordered" >
                            	<tr style="text-align:center">
                            		<th >Khu nhà</th>
                                	<th >Số phòng</th>                                    
                                    <th >Số lượng sinh viên</th>
                                     <th >Tình trạng phòng</th>
                                     <th >Giá phòng</th>
                                </tr>
                                <?php
									$sl= mysqli_query($conn,"Select * from phong order by khunha,sophong asc");
        							while($row = mysqli_fetch_assoc($sl))
									{
								?>
                                <tr>
                                  <td><?php echo $row['khunha']; ?></td>
                                  <td><?php echo $row['sophong']; ?></td>                                  
                                  <td><?php echo $row['soluongsinhvien']; ?></td>
                                  <td><?php echo $row['tinhtrangphong']; ?></td>
                                  <td><?php echo $row['gia']; ?></td>
                                </tr>
                             	<?php }?>
                                </table>
                                                       
                  </form>
             </div> <!-- boxtintuc --> 
        </div>
        <!-- /.container -->    
        </div>
</div>
</div>
<?php include('footer.php');?>
    