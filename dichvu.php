<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8'); 
?>

<?php include('header.php');?>
<?php
 	if(isset($_SESSION['username'])) include('menuLogined.php');
	else include('menu2.php');
 ?>
<?php include('bodyleft.php');?>

        <div class="col-md-9">
            <div class="khunggiua">
            
			<div class="boxtitle"><h4><strong>THÔNG TIN CÁC LOẠI HÌNH DỊCH VỤ</strong></h4></div>
            <div class="boxChung">
					<table class="table table-striped" border="2" width="50%">
                                <tr>
									<th>STT</th>
									<th>Tên Dịch Vụ </th>
									<th>Chức năng </th>
								</tr>
								<tr>
									<td>
									1
									</td>
									<td>
									Căng-tin
									</td>
									<td>
									Bán các mặt hàng thực phẩm ăn uống, và các mặt hàng phục vụ sinh hoạt.
									</td>
								</tr>
								<tr>
									<td>
									2
									</td>
									<td>
									Khu Sinh hoạt chung
									</td>
									<td>
									Tổ chức các hội thảo, hội hộp sinh hoạt cho các sinh viên nội trú
									</td>
								</tr>
								<tr>
									<td>
									3
									</td>
									<td>
									Phòng học tập thể
									</td>
									<td>
									Nơi cho các sinh viên nội trú học tập và làm việc, nơi có không gian yên tĩnh và dễ tập trung...
									</td>
								</tr>
								<tr>
									<td>
									4
									</td>
									<td>
									Nhà thể thao đa năng
									</td>
									<td>
									Nơi cho các sinh viên hoạt động thể thao, gồm nhiều khu bóng chuyền, bóng bàn, bóng rổ,...
									</td>
								</tr>
								<tr>
									<td>
									5
									</td>
									<td>
									Khu viên cây xanh
									</td>
									<td>
									Nơi thư giãn, không gian xanh mát cho ký túc xá
									</td>
								</tr>
								<tr>
									<td>
									6
									</td>
									<td>
									Quán Cafe KTX 
									</td>
									<td>
									Nơi cho mọi người hội họp thư giản với những thức uống, nghe nhạc xem phim, giải trí thư giản đầu óc....
									</td>
								</tr>
								<tr>
									<td>
									7
									</td>
									<td>
									Phòng tập GYM 
									</td>
									<td>
									Nơi tập trung cho các vận động sinh viên thích bộ môn thể thao thể hình, vóc dáng với các body siêu hấp dẫn
									</td>
								</tr>
								</table>
                                
                            </div>

            </div>
        </div>
    </div>

<?php include('footer.php');?>



    