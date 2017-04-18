 <nav class="navmenu2">
        <div class="container">
            <!-- Nav -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#login">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="caret"></span>
                </button>
            </div>
            <!-- Nav collapse -->
            <div class="collapse navbar-collapse  " id="login">
                <div class="navbar-right">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12 ">

                                            <form class="form" method="post" action="index.php" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">

                                                  <input type="text" class="form-control" name="txtUsername" placeholder="Nhập Tài Khoản">
                                                </div>
                                                <div class="form-group">

                                                    <input type="password" class="form-control" name="txtPassword" placeholder="Nhập Mật Khẩu">
                                                    <div class="help-block text-right"><a href="">Quên Mật Khâu ?</a>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" name="dangnhap">Đăng Nhập</button>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Nhớ mật khẩu
                                                    </label>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Navigation -->
	
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