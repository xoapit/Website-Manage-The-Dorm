<?php
   include('ketnoi.php');
   function getTin($idtheloai,$conn){
   	 $query = mysqli_query($conn,"SELECT * FROM tin WHERE idtheloai='$idtheloai' and anhien='1' limit 10");
   	 return $query;
   }
   
   function getLienKet($conn){
   	 $query = mysqli_query($conn,"SELECT * FROM lienket limit 10");
   	 return $query;
   }
   
   ?>
<!-- Page Content -->
<div class="container">
<div class="col-md-3">
   <div class="boxtrai">
      <div class="boxtitle">
         <span class="glyphicon glyphicon-globe"></span>&#160 THÔNG BÁO
      </div>
      <ul>
         <marquee direction="up" scrolldelay="10" scrollamount="1" behavior="alternate" height="350" onmouseover="this.stop()" onmouseout="this.start()">
            <?php
               $query= getTin(2,$conn); 
               while($row = mysqli_fetch_assoc($query)){?>
            <li><a href="<?php echo "?idtheloai=".$row['idtheloai']."&idtin=".$row['idtin']?>">&#9679 <?php echo $row['tieude']?> </a>
            </li>
            <?php }?>   
         </marquee>
      </ul>
   </div>
   <div class="boxtrai" style="height:330px">
      <div class="boxtitle">
         <span class="glyphicon glyphicon-folder-open"></span>
         &#160 Danh Mục Liên Kết
      </div>
      <ul>
      	<marquee direction="down" scrolldelay="20" scrollamount="1" behavior="alternate" height="280" onmouseover="this.stop()" onmouseout="this.start()">
          <?php
               $query1= getLienKet($conn); 
               while($row = mysqli_fetch_assoc($query1)){?>
            <li><a href="<?php echo $row['link']?>">&#9679 <?php echo $row['tieude']?> </a>
            </li>
            <?php } ?>  
            </marquee>
      </ul>
   </div>
</div>