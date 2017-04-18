<nav class="navmenu2" style="height:48px">
        <div class="row">
            <div class="col-xs-12">
            <div class="dangnhapdc" style="float:right;color:white; margin-right:6px;margin-top:14px;">
   <?php
       
		   echo $_SESSION['hovaten']."  (" ;
           echo $_SESSION['username'].")" ;
           echo '&nbsp; <a href="logout.php" style="color:#1abc9c">Logout</a>';
      
       ?>
   </div>
            
            </div>
            <!-- Nav collapse -->
   
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
        </div>  <!--ket thuc row-->
    </nav>
    <!--chu chay-->
    <div class="row" style="font-weight:600" style="color:#2980b9; padding:15px">
        <marquee scrollamount="3">
        	<?php
				 include('ketnoi.php');
				 $querymenu = mysqli_query($conn,"SELECT * FROM slogan");
				 if($row = mysqli_fetch_assoc($querymenu)) echo $row['noidung'];
   			?>
        </marquee>
    </div>
    <!--chu chay-->