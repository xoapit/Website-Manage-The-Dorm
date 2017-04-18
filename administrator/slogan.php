<?php
   session_start();
   header('Content-Type: text/html; charset=UTF-8');
   include('../ketnoi.php'); 
   ?>
<?php include('../administrator/header.php');?>
<?php
   if(isset($_SESSION['admin'])) include('../menuLogined.php');
   else include('../menu2.php');
   ?>
<div class="" style="background:#2c3e50">
   <div class="boxtitle text-center" style="background:#e74c3c">Slogan</div>
   <?php
		if (!isset($_SESSION['admin'])){
			echo "<hr>";
		echo "<h5>BẠN CHƯA ĐĂNG NHẬP</h5>";
		echo "<hr>";
		exit;
	}
	?>
    <?php
		if(isset($_POST['them'])){
			$noidung=$_POST['noidung'];
			$query = mysqli_query($conn,"insert into slogan (noidung) values(N'$noidung')");
		}
	 	
		if(isset($_GET['id'])){
			$id=$_GET['id'];		
			$query = mysqli_query($conn,"delete from slogan where id='$id'");
	   }
		
	   function gettttb($conn){
		 $query = mysqli_query($conn,"SELECT * FROM slogan");
		 return $query;
	   }
   ?>
   <hr>
   <div class="container" style="background:#ecf0f1; padding:20px;">
   	 <h6>Danh Sách Slogan - (*) Slogan trên cùng sẽ được hiển thị.</h6>
     <form action="" method="post">
      <tr>
         <td>Nội Dung: </td>
         <td> <input type="text" name="noidung" value="" required style="color:Black;width:30%;font-size:18px"/></td>
      </tr>
     <button type="submit" name="them" class="btn btn-danger" style="float:right"> Thêm </button>
     </form>
     <hr>
      <div class="" style="border:#999 solid 1px;">
         <table class="table table-striped" style="border-collapse:collapse; ">
            <thead>
               <tr style="background:#3498db">
                  <th>ID</th>
                  <th>Nội Dung</th>
                  <th>Xóa</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = gettttb($conn);
                     while($row = mysqli_fetch_assoc($query)){
                   ?>
               <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['noidung'];?></td>
                  <td><a href="<?php echo "?id=".$row['id'];?>">Xóa </a></td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
  <hr>
  <div class="text-right" style="color:#CCC">Copyright 2016 Team 13T1 BKĐN</div>