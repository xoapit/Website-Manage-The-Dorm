<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>KTX Bách Khoa Hà Nội</title>
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
      <script src="../ckeditor/ckeditor.js"></script>
      <!-- jQuery -->
      <script src="../bootstrap/js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="../bootstrap/js/bootstrap.min.js"></script>
   </head>
   <body class="bodypage" style="margin-bottom:0px; padding-bottom:0px;">
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
         <!-- Nav -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="color:#FFF">
            <span class="glyphicon glyphicon-home"></span> HOME
            </a>
         </div>
         <!-- Nav collapse -->
         <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav ">
               <li>
               	   <a data-toggle="dropdown" href="#" style="color:#FFF">QUẢN LÝ BÀI VIẾT
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                  	 <li><a href="../administrator/tintucthongbao.php">TIN TỨC - THÔNG BÁO </a>
               		 </li>
                     <div class="divider"></div>
                     <li><a href="../administrator/slide.php">Slide Ảnh</a>
                     </li>
                     <div class="divider"></div>
                     <li><a href="../administrator/slogan.php">Slogan</a>
                     </li>
                     <div class="divider"></div>
                     <li><a href="../administrator/lienket.php">Liên Kết</a>
                     </li>
                  </ul>
               </li>
               <li><a href="../administrator/dangkygianhan.php" style="color:#FFF">ĐK/GH PHÒNG</a>
               </li>
               <li>
                  <a data-toggle="dropdown" href="#" style="color:#FFF">TÀI KHOẢN
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="../administrator/taikhoan.php">Admin</a>
                     </li>
                     <div class="divider"></div>
                     <li><a href="../administrator/quanly.php">Quản Lý</a>
                     </li>
                  </ul>
               </li>
               <li><a href="../administrator/tinnhan.php" style="color:#FFF">
                  <span class="glyphicon glyphicon-envelope"></span>
                  Tin Nhắn</a>
               </li>
               <li>
                  <a href="../index.php" style="color:#FFF">KTX</a>
               </li>
            </ul>
            <div class="navbar-right">
               <div class="search-box">
                  <form class="search-form navbar-form" action="../administrator/timkiem.php" method="post">
                     <input class="form-control" type="text" name="timkiem" placeholder="MSSV Hoặc Họ Và Tên">
                     <button class="btn btn-danger " name="tim">
                     <span class="glyphicon glyphicon-search"></span>
                     </button>
                  </form>
               </div>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <!-- Navigation -->
      <div class="headerlogo">
         <div class="row" style="padding-top: 50px; background:url(../image/connect2.png);">
            <div class="col-md-offset-1 col-md-11">
               <h3 class="paddingText font">
                  <img src="../image/logohn.png" width="4%" height="4%" >    KÍ TÚC XÁ BÁCH KHOA
               </h3>
            </div>
         </div>
      </div>
      <?php include('../ketnoi.php'); ?>