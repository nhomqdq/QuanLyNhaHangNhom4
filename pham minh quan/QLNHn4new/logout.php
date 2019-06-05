<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <?php 
        include("daketnoi.php.php");

        header('Content-Type: text/html; charset=UTF-8');
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'BẠN ĐANG ĐĂNG NHẬP VỚI TÀI KHOẢN CÓ TÊN LÀ ::->'.$_SESSION['username']."<br/>";
           echo 'VUI LÒNG CHUYỂN TÀI KHOẢN <a href="dangnhap.php">Logout</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập';
       }
       ?>
    </body>
</html>