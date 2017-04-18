<?php 
   session_start();
   include('../ketnoi.php');
   ?>
<?php
   if(isset($_POST['luuthongtin'])){
          //Nhúng file kết nối với database
     
           
     //Khai báo utf-8 để hiển thị được tiếng việt
     header('Content-Type: text/html; charset=UTF-8');
   
     
   $ngaysinh  = $_POST['ngaysinh'];
     $email     = $_POST['email'];
     $cmnd      = $_POST['cmnd'];
     $dantoc    = $_POST['dantoc'];
     $noisinh   = $_POST['noisinh'];
     $quoctich  = $_POST['quoctich'];
     $sdt       = $_POST['sdt'];
   
   
   
   $change = mysqli_query($conn,"UPDATE sinhvien SET ngaysinh ='$ngaysinh', email ='$email', cmnd ='$cmnd' , dantoc =N'$dantoc', noisinh =N'$noisinh', quoctich =N'$quoctich', sdt ='$sdt' where mssv = '".$_SESSION['masosv']."'");
   
   }
   
   ?>
    <?php include('../adminquanly/header.php');?>
    <?php
   if(isset($_SESSION['adminquanly'])) include('../menuLogined.php');
   else include('../menu2.php');
   //echo 'chay toi day';
   ?>
        <!-- Navigation -->
        <div class="col-xs-12 col-md-12">
            <div class="boxThongtinsinhvien">
                <div class="boxtitle">
                    <span class="glyphicon glyphicon-list-alt"></span>&#160;&#160;Thông tin sinh viên
                </div>
                <?php
      if(!isset($_SESSION['adminquanly'])){
        echo "<hr>";
        echo '<h4>BẠN CHƯA ĐĂNG NHẬP</h4>';
        echo "<hr>";
        exit;
        
                    } ?>
                    <?php
   if(isset($_POST['tim'])){
   $timkiem = $_POST['timkiem'];
   $sql="select * from sinhvien where mssv = '$timkiem'";
   $query1=mysqli_query($conn,$sql);
   if(mysqli_num_rows($query1) != 0)
    $sql="select * from hopdong right join sinhvien on sinhvien.mssv=hopdong.mssv where sinhvien.mssv = '$timkiem'";
   else 
    $sql="select * from hopdong right join sinhvien on sinhvien.mssv=hopdong.mssv where sinhvien.hovaten =N'$timkiem'";
   $query=mysqli_query($conn,$sql);
      if(mysqli_num_rows($query) == 0){
        echo '<hr><h4>KHÔNG TÌM THẤY SINH VIÊN</h4><hr>';
        exit;
    }
   else{
        $row=mysqli_fetch_assoc($query);
        $_SESSION['masosv']  = $row['mssv'];
   }
   }
   ?>
   <?php if(isset($_POST['luuthongtin'])){ echo '<hr><h4>Lưu Thông Tin Thành Công</h4><hr>'; exit;}?>
                        <div class="boxtintuc">
                            <strong><span>THÔNG TIN CHUNG:</span></strong>
                            <form action="" method="post">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Họ và tên:</td>
                                            <td> <input type="text" value="<?php echo $row['hovaten']; ?>" maxlength="20" style="color:Black;font-weight:bold;width:255px;font-size:13px" /></td>
                                            <td>MSSV:</td>
                                            <td> <input type="text" value="<?php echo $row['mssv']; ?>" maxlength="20"  style="color:Black;font-weight:bold;width:255px;font-size:13px" /></td>
                                            <td>Lớp: </td>
                                            <td> <input type="text" value="<?php echo $row['lop']; ?>" maxlength="20" style="color:Black;font-weight:bold;width:100px;font-size:13px" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ngành:</td>
                                            <td><input type="text" value="<?php echo $row['khoa']; ?>" maxlength="50" style="color:Black;font-weight:bold;width:255px;font-size:13px" />
                                            </td>
                                            <td>Giới Tính:</td>
                                            <td><input type="text" value="<?php echo $row['gioitinh']; ?>" maxlength="20"  style="color:Black;font-weight:bold;width:255px;font-size:13px" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ngày Sinh:</td>
                                            <td><input type="text" name="ngaysinh" value="<?php echo $row['ngaysinh']; ?>" maxlength="20" style="width:255px;" />
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
                                            <td><input type="text" name="email" value="<?php echo $row['email']; ?>" maxlength="50" style="width:255px;" />
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
                                            <td><input type="text" name="cmnd" value="<?php echo $row['cmnd']; ?>" maxlength="20"  style="width:255px;" />
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
                                            <td><input type="text" name="dantoc" value="<?php echo $row['dantoc']; ?>" maxlength="20" style="width:120px;" />
                                            </td>
                                            <td>Nơi sinh:</td>
                                            <td><input type="text" name="noisinh" value="<?php echo $row['noisinh']; ?>" maxlength="50" style="width:120px;" />
                                            </td>
                                            <td>Quốc tịch:</td>
                                            <td><input type="text" name="quoctich" value="<?php echo $row['quoctich']; ?>" maxlength="20" style="width:120px;" />
                                            </td>
                                            <td>Điện thoại:</td>
                                            <td><input type="text" name="sdt" value="<?php echo $row['sdt']; ?>" maxlength="20" style="width:120px;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Khu ở:</td>
                                            <td><input type="text" value="<?php echo $row['khunha']; ?>" maxlength="20" style="color:Black;font-weight:bold;width:50px;text-align:center;font-size:13px" />
                                            </td>
                                            <td>Phòng ở:</td>
                                            <td><input type="text" value="<?php echo $row['sophong']; ?>" maxlength="20" style="color:Black;font-weight:bold;width:50px; text-align:center;font-size:13px" />
                                            </td>
                                             <td>Ngày Đăng Ký:</td>
                                            <td><input  type="text" name="ngaylap" value="<?php echo $row['ngaylap']; ?>"  readonly disabled maxlength="20"style="width:120px;" />
                                         </td>
                                        <td>Ngày Hết Hạn:</td>
                                            <td><input  type="text" name="ngaykethuc" value="<?php echo $row['ngayketthuc']; ?>"  readonly disabled maxlength="20"style="width:120px;" />
                                         </td> 
                                        </tr>
                                    </table>
                                </div>
                                
                                <button type="submit" name="luuthongtin" class="btn btn-primary btn-block">Lưu thông tin</button>

                            </form>
                        </div>
                        <!-- boxtintuc -->
            </div>
            <!-- /.container -->

            <!-- Footer -->


            <div class="row" style="margin-bottom:10px">