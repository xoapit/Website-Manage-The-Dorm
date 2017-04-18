<div class="boxSlide">
   <!-- Wrapper for Slides -->
   <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carousel" data-slide-to="0" class="active"></li>
         <?php 
            include('ketnoi.php');
            $querys = mysqli_query($conn,"SELECT * FROM slide");
            $dem=mysqli_num_rows($querys); 
            for($i=1;$i<$dem;$i++){
            ?>
         <li data-target="#carousel" data-slide-to="1"></li>
         <?php } ?>
         
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
         <div class="active item fill" 
            style="background:url(<?php $ro=mysqli_fetch_assoc($querys); echo $ro['url']; ?>); background-size: cover;">
            <?php echo $ro['noidung']; ?>
         </div>
         <?php 
            while($ro=mysqli_fetch_assoc($querys)){
            ?>
         <div class="item fill" 
            style="background:url(<?php echo $ro['url']; ?>); background-size: cover;">
            <?php echo $ro['noidung']; ?>
         </div>
         <?php } ?>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#carousel" data-slide="prev" style="padding-top:120px">
      <span class="glyphicon glyphicon-chevron-left" <</span>
      </a>
      <a class="carousel-control right" href="#carousel" data-slide="next" style="padding-top:120px">
      <span class="glyphicon glyphicon-chevron-right" <</span>
      </a>
   </div>
</div>
<?php
   if(isset($_GET['idtheloai'])&&isset($_GET['idtin'])){
   	$idtheloai=$_GET['idtheloai'];
   	$idtin=$_GET['idtin'];
   	$query = mysqli_query($conn,"SELECT * FROM tin WHERE idtheloai='$idtheloai' and idtin='$idtin'");
   	$row = mysqli_fetch_assoc($query);
   	
   ?>
<div class="boxChung">
   <div class="boxtitle"><span class="glyphicon glyphicon-leaf"></span>&#160<?php echo $row['tieude'];?>
   </div>
   <div class="noidung">
      <?php echo $row['noidung']; ?>
   </div>
   <?php } ?>
</div>
<div class="boxChung">
   <div class="boxtitle">
      <span class="glyphicon glyphicon-list-alt"></span>
      &#160 Tin Tức Mới
   </div>
   <!--phần tin -->
   <div class="panel panel-default" style="border:none">
      <div class="panel-body">
         <div class="row">
            <div class="col-xs-12">
               <ul class="demo1">
                  <marquee direction="up" scrolldelay="10" scrollamount="1" behavior="alternate" height="350" onmouseover="this.stop()" onmouseout="this.start()">
                     <?php
                        $query= getTin(3,$conn); 
                        while($row = mysqli_fetch_assoc($query)){?>
                     <li class="news-item">
                        <table cellpadding="4">
                           <tbody>
                              <tr>
                                 <td><img src="<?php echo $row['image']; ?>" width="100" height="100">
                                 </td>
                                 <td><a href="<?php echo "?idtheloai=".$row['idtheloai']."&idtin=".$row['idtin']?>">&#9679 <?php echo $row['tieude']?></a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </li>
                     <?php }?>   
                  </marquee>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>