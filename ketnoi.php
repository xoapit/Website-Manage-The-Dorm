<?php
/*
    $ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $ketnoi['dbname'] = 'u804013128_qlsv'; //Đây là tên của Database
    $ketnoi['username'] = 'u804013128_qlsv'; //Tên sử dụng Database
    $ketnoi['password'] = '1234566';//Mật khẩu của tên sử dụng Database
*/
    
    $ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $ketnoi['dbname'] = 'qlsv'; //Đây là tên của Database
    $ketnoi['username'] = 'root'; //Tên sử dụng Database
    $ketnoi['password'] = '';//Mật khẩu của tên sử dụng Database
  


    $conn = mysqli_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}","{$ketnoi['dbname']}")
    or
        die("Không thể kết nối database");
	mysqli_query($conn,"SET character_set_results=utf8");

?>