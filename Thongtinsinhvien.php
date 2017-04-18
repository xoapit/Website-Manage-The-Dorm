
<?php 
       session_start();
	   include('ketnoi.php');
?>
<?php
  if(isset($_POST['luuthongtin'])){
         //Nhúng file kết nối với database
    
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

   
	$_SESSION['ngaysinh']  = $_POST['ngaysinh'];
    $_SESSION['email']     = $_POST['email'];
    $_SESSION['dantoc']    = $_POST['dantoc'];
    $_SESSION['noisinh']   = $_POST['noisinh'];
    $_SESSION['quoctich']  = $_POST['quoctich'];
    $_SESSION['sdt']      = $_POST['sdt'];
	


	$change = mysqli_query($conn,"UPDATE sinhvien SET ngaysinh ='".$_SESSION['ngaysinh']."', email ='".$_SESSION['email']."', dantoc =N'".$_SESSION['dantoc']."', noisinh =N'".$_SESSION['noisinh']."', quoctich =N'".$_SESSION['quoctich']."', sdt ='".$_SESSION['sdt']."'where mssv = '".$_SESSION['username']."'");
 
}
  
?>
<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
	//echo 'chay toi day';
 ?>
    <!-- Navigation -->
        <div class="col-xs-12 col-md-12">              
                <div class="boxThongtinsinhvien">
                   <div class="boxtitle">
                       <span class="glyphicon glyphicon-list-alt"></span>&#160;&#160;Thông tin sinh viên
                    </div>
                    <?php
					if(!isset($_SESSION['username'])){
						echo "<hr>";
						echo '<h4>BẠN CHƯA ĐĂNG NHẬP</h4>';
						echo "<hr>";
						include('footer.php');
						exit;
						
					}
					?>
                    <?php
						$query=mysqli_query($conn,"select * from hopdong right join sinhvien on hopdong.mssv=sinhvien.mssv where sinhvien.mssv='".$_SESSION['username']."'");
						$ro=mysqli_fetch_assoc($query);
					?>
                  <div class ="boxtintuc">
                        <strong><span>THÔNG TIN CHUNG:</span></strong>
                      <form action="" method="post">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                        <td>Họ và tên:</td>
                <td> <input type="text" value="<?php echo $ro['hovaten']; ?>" maxlength="20" readonly disabled="disabled" style="color:Black;font-weight:bold;width:255px;font-size:13px"/></td>
                                        <td>MSSV:</td>
                <td> <input type="text" value="<?php echo $ro['mssv']; ?>" maxlength="20" readonly disabled="disabled" style="color:Black;font-weight:bold;width:255px;font-size:13px"/></td>
                                        <td>Lớp: </td>
                                       <td> <input type="text" value="<?php echo $ro['lop']; ?>" maxlength="20" readonly disabled="disabled"  style="color:Black;font-weight:bold;width:100px;font-size:13px" />
                                       </td>
                                       <td></td>
                                       <td></td>
                                       
                                 </tr>
                                 <tr>
                                       <td>Ngành:</td>
                                       <td><input type="text" value="<?php echo $ro['khoa']; ?>" maxlength="50" readonly disabled="disabled" style="color:Black;font-weight:bold;width:255px;font-size:13px" />
                                        </td>
                                       <td>Giới Tính:</td>
                                       <td><input type="text" value="<?php echo $ro['gioitinh']; ?>" maxlength="20" readonly disabled="disabled" style="color:Black;font-weight:bold;width:255px;font-size:13px" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                 </tr>
                                 
                                 <tr>
                                       <td>Ngày Sinh:</td>
                                       <td><input type="text" name="ngaysinh" value="<?php echo $ro['ngaysinh']; ?>" maxlength="20"  style="width:255px;" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                 </tr>
                                 <tr>
                                       <td>Email:</td>
                                       <td><input type="text" name="email" value="<?php echo $ro['email']; ?>" maxlength="50" style="width:255px;" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                 </tr>
                                 <tr>
                                       <td>Số CMND:</td>
                                       <td><input type="text" name="cmnd" value="<?php echo $ro['cmnd']; ?>" maxlength="20" readonly disabled="disabled" style="width:255px;" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                 </tr>
                                 <tr>
                                         <td>Dân tộc:</td>
                                         <td><input type="text" name="dantoc" value="<?php echo $ro['dantoc']; ?>" maxlength="20" style="width:120px;" />
                                            </td> 
                                           <td>Nơi sinh:</td>
                                           <td><input  type="text" name="noisinh" value="<?php echo $ro['noisinh']; ?>" maxlength="50"style="width:120px;" />
                                            </td> 
                                            <td>Quốc tịch:</td>
                                            <td><input type="text" name="quoctich" value="<?php echo $ro['quoctich']; ?>" maxlength="20"style="width:120px;" />
                                            </td> 
                                            <td>Điện thoại:</td>
                                            <td><input  type="text" name="sdt" value="<?php echo $ro['sdt']; ?>"  maxlength="20"style="width:120px;" />
                                            </td>    
                                     </tr>
                                     <tr>
                                     <td>Khu ở:</td>
                                  <td><input type="text" value="<?php echo $ro['khunha']; ?>"maxlength="20" readonly disabled="disabled" style="color:Black;font-weight:bold;width:50px;text-align:center;font-size:13px" />
                                       </td>

                                       <td>Phòng ở:</td>
                                   <td><input type="text" value="<?php echo $ro['sophong']; ?>" maxlength="20" readonly disabled="disabled" style="color:Black;font-weight:bold;width:50px; text-align:center;font-size:13px" />
                                        </td>
                                        <td>Ngày Đăng Ký:</td>
                                            <td><input  type="text" name="ngaylap" value="<?php echo $ro['ngaylap']; ?>"  readonly disabled maxlength="20"style="width:120px;" />
                                         </td>
                                        <td>Ngày Hết Hạn:</td>
                                            <td><input  type="text" name="ngaykethuc" value="<?php echo $ro['ngayketthuc']; ?>"  readonly disabled maxlength="20"style="width:120px;" />
                                         </td> 
                                    </tr>
                            </table>
                            </div>
                            <?php if(isset($_POST['luuthongtin'])) echo '<h4>Lưu Thông Tin Thành Công</h4>';?>
                            <button type="submit" name="luuthongtin" class="btn btn-primary btn-block">Lưu thông tin</button>
                                                       
                  </form>
             </div> <!-- boxtintuc --> 
        </div>
        <!-- /.container -->

    <!-- Footer -->
   

   <div class="row" style="margin-bottom:10px">
</div>

   <!--<script>
        $('.carousel').carousel({

        })
    </script>-->
    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>