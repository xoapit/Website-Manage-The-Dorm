<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

?>


<?php include('header.php');?>
<?php include('menuLogin.php'); ?>
<?php include('bodyleft.php');?>

        <div class="col-md-9">
            <div class="khunggiua">
            <?php include('bodytintuc.php');?>

            </div>
        </div>
    </div>

<?php include('footer.php');?>