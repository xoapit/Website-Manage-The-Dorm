<!-- thumbnail-->
<?php
   include('ketnoi.php');
      
   	 $sp = mysqli_query($conn,"SELECT * FROM phong ");
   	  $nv = mysqli_query($conn,"SELECT * FROM nhanvien ");
     $sophong = mysqli_num_rows($sp);
	 $nhanvien = mysqli_num_rows($nv);
     
?>

     <div class="capacity">
                <div class="container">
                    <h3>Ký túc xá Bách khoa</h3>
                    <div class="row">
                    <div class="col-xs-12 col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                        <div class="capil_text">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $sophong*10; ?>' data-delay='1' data-increment="50">0</div>
                            
                            <p>Chổ Ở</p>
                        </div>
                        <div class="caption">
                    <p><a href="index.php?idtheloai=1&idtin=1" class="btn btn-primary" role="button">Xem Chi Tiết</a> </p>
                </div>
                    </div>
                    
                    
                    <div class="col-xs-12 col-md-3 capabil_grid2 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
                        <div class="capil_text">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max= '<?php echo $sophong;?>' data-delay='1' data-increment="1">0</div>
                           
                            <p>Số Phòng</p>
                        </div>
                        <div class="caption">
                    <p><a href="Thongtinphong.php" class="btn btn-primary" role="button">Xem Chi Tiết</a> </p>
                </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                        <div class="capil_text">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max= '<?php echo $nhanvien;?>' data-delay='1' data-increment="2">0</div>
                           
                            <p>Cán bộ</p>
                        </div>
                        <div class="caption">
                    <p><a href="Thongtinnhanvien.php" class="btn btn-primary" role="button">Xem Chi Tiết</a> </p>
                </div>
                    </div>
                                        
    
    
    
   <div class="col-xs-12 col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
                        <div class="capil_text">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='7' data-delay='0.2' data-increment="1">0</div>
                        
                           <p>Cửa Hàng Dịch Vụ</p>
                        </div>
                        <div class="caption">
                    <p><a href="dichvu.php" class="btn btn-primary" role="button">Xem Chi Tiết</a> </p>
                </div>
                    </div>
                   
                    <div class="clearfix"></div>
                </div>
            </div>
            </div>
            

    <!-- thumbnail-->
    <!-- Footer -->
    <footer>
    	<a name="LienHe"></a>
        <div class="row">
            <div class="col-xs-12 col-md-6 font paddingText" style="border-right:#3498db solid 2px" style="border-bottom:#3498db solid 2px">
                <h3 class="colorTextWhite" style="font-weight:800">Trung tâm QL Ký túc xá</h3>
                <div class="gachchan"></div>
                <br/>
                <p>Quản lý toàn diện sinh viên lưu trú trong khuôn viên Ký túc xá. Điều hành các hoạt động phục vụ sinh hoạt và học tập của sinh viên nội trú. </p>


            </div>
            <div class="col-xs-12 col-md-6 font paddingText" style="padding-left:5%">

                <h3 class="colorTextWhite" style="font-weight:800">Liên Hệ</h3>
                <div class="gachchan"></div>
                <br/>
                <span class="glyphicon glyphicon-phone"> (04).38692.942 </span>
                <span class="glyphicon glyphicon-envelope font" style="margin-left:10px"> ktx@hust.edu.vn</span>
                <span class="glyphicon glyphicon-copyright-mark"> 2016 TTQL KTX. Team 13T1 BKĐN. All right reserved
                </span>
                <span class="glyphicon glyphicon-copyright-mark">
                	Thành Viên: Qúy Toàn Anh Đạt Tin
                </span>
            </div>

        </div>
        <!-- /.row -->
    </footer>


    <!-- Script Slide -->

    <script>
        $('.carousel').carousel({

        })
    </script>
    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>