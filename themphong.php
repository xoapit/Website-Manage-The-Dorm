<?php
   session_start();
    
   //Khai báo utf-8 để hiển thị được tiếng việt
   header('Content-Type: text/html; charset=UTF-8');
   ?>
<?php include('ketnoi.php');?>
<?php include('header.php');?>
<?php 
   function themphong($conn,$khunha,$dau,$cuoi) {
   	while($dau<=$cuoi){
   		$query = mysqli_query($conn,"insert into phong (khunha,sophong,soluongsinhvien,tinhtrangphong,gia)
   		values('$khunha','$dau','0',N'Tốt','100000')");
   		$dau++;
   		}
   		return $query;
   }
   
   function themsv($conn,$dau,$cuoi) {
   	$cmnd = 191850145;
   	while($dau<=$cuoi){
		$i=$dau;
		if($i%6==0) $ho = "Hồ";
   		else if($i%6==1) $ho = "Võ";
		else if($i%6==1) $ho = "Trần";
		else if($i%6==1) $ho = "Hoàng";
		else if($i%6==1) $ho = "Chu";
   		else $ho = "Lê";
   		
		if($i%8==0) $dem = "Thị";
   		else if($i%4==0) $dem = "Khánh";
   		else if($i%4==1) $dem = "Đình";
   		else if($i%4==2) $dem = "Quốc";
   		else $dem = "Nguyên";
   		
   		if($i%7==0) $ten = "Vũ";
   		else if($i%7==1) $ten = "Hiền";
   		else if($i%7==2) $ten = "Anh";
   		else if($i%7==3) $ten = "Tuấn";
   		else if($i%7==4) $ten = "Thành";
   		else if($i%7==5) $ten = "Thắng";
   		else $ten = "Ngọc";
   		$hovaten=$ho." ".$dem." ".$ten;
		
   		$query = mysqli_query($conn,"insert into sinhvien (mssv,hovaten,ngaysinh,gioitinh,sdt,khoa,password,lop,dantoc,email,cmnd,noisinh,quoctich)
   		values('$dau',N'$hovaten','1995/03/11',N'Nam','0168454521',N'Công Nghệ Thông Tin','$dau','13T3','Kinh','Team13T1@gmail.com','$cmnd',N'Thái Bình',N'Việt Nam')");
   		$cmnd++;
   		$dau++;
   		}
   		return $query;
   }
   
   function themhopdong($conn,$khunha,$dau,$cuoi) {
	$sophong=105;
   	while($dau<=$cuoi){
   		$query = mysqli_query($conn,"insert into hopdong (mssv,khunha,sophong,ngaylap,ngaybatdau,ngayketthuc,thanhtoan)
   		values('$dau','$khunha','$sophong','2016/12/01','2016/12/01','2017/3/01',N'Đã Thanh Toán')");
   		$dau++;
		if($dau%4==0) {
			$sophong++;
			if($sophong=='111') $sophong='201';
			if($sophong=='211') $sophong='301';
			if($sophong=='311') {
				$khunha='B';
				$sophong='101';
			}
		}
   	}
   		return $query;
   }
   
   function updateten($conn,$dau,$cuoi){
   	for($i=$dau; $i<=$cuoi; $i++){
   		if($i%6==0) $ho = "Hồ";
   		else if($i%6==1) $ho = "Võ";
		else if($i%6==1) $ho = "Trần";
		else if($i%6==1) $ho = "Hoàng";
		else if($i%6==1) $ho = "Chu";
   		else $ho = "Lê";
   		
		if($i%8==0) $dem = "Thị";
   		else if($i%4==0) $dem = "Ngọc";
   		else if($i%4==1) $dem = "Duy";
   		else if($i%4==2) $dem = "Quốc";
   		else $dem = "Văn";
   		
   		if($i%6==0) $ten = "Hào";
   		else if($i%6==1) $ten = "Hiển";
   		else if($i%6==2) $ten = "Quân";
   		else if($i%6==3) $ten = "Phong";
   		else if($i%6==4) $ten = "Tam";
   		else if($i%6==5) $ten = "Danh";
   		else $ten = "Văn";
   		$hovaten=$ho." ".$dem." ".$ten;
   		$query = mysqli_query($conn,"update sinhvien set hovaten=N'$hovaten' where mssv='$i'");
   	}
   	return $query;
   }
   
   	function updatett($conn,$dau,$cuoi){
   	for($i=$dau; $i<=$cuoi; $i++){
   		if($i%3==0) $ho = "Hồ";
   		else if($i%3==1) $ho = "Võ";
   		else $ho = "Lê";
   		
   		$hovaten=$ho." ".$dem." ".$ten;
   		$query = mysqli_query($conn,"update sinhvien set hovaten=N'$hovaten' where mssv='$i'");
   	}
   	return $query;
   }
   
   function capnhatsosv($conn) {
   		$query = mysqli_query($conn,"select * from phong");
		while($row=mysqli_fetch_assoc($query)){
			$khunha=$row['khunha'];
			$sophong=$row['sophong'];
			$query1 = mysqli_query($conn,"select count(*) as dem from hopdong where khunha='$khunha' and sophong='$sophong'");
			$row1=mysqli_fetch_assoc($query1);
			$dem=$row1['dem'];
			$query = mysqli_query($conn,"update phong set soluongsinhvien='$dem' where khunha='$khunha' and sophong='$sophong' ");
		}
		return $query;
   }
   
   //$query = themsv($conn,'102130200','102130300');
   //$queryy= capnhatsosv($conn);
   //$query=updateten($conn,'102130040','102130070');
   //$query = themhopdong($conn,'B','102130201','102130300');
   function themhoadon($conn,$khunha,$dau,$cuoi) {
   	while($dau<=$cuoi){
		$sql = "insert into hoadon (sophong,khunha,dongiadien,chisodiendau,chisodiencuoi,chisonuocdau,chisonuoccuoi,thangghiso,dongianuoc,manhanvien)
values('$dau','$khunha','2000','130','185','35','55','2016/12/4','5000','NV01')";
   		$query = mysqli_query($conn,$sql);
   		$dau++;
		echo $dau." ";
   		}
   		return $query;
   }
   
   //$query = themhoadon($conn,'A','301','310');
   
   
   ?>