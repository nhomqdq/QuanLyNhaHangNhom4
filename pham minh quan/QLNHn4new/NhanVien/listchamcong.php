<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script src="main.js"></script>
    <script>
     $(document).ready(function(e) {
        $("#add_post_month").click(function(){
              $.post("chamcongthang.php",{},function(data){    
              });
              alert("Đã Tổng Công Tháng");
            });
     });
</script>
<?php
if(!isset($_POST["ngay"])){
    include("../Ketnoi.php");
    $con=Ketnoi();
   
            mysqli_set_charset($con, 'UTF8');
    $sql="select tblnhanvien.Manhanvien,tblnhanvien.Tennhanvien from tblnhanvien,tblchamcong where tblnhanvien.Manhanvien=tblchamcong.Manhanvien";
    $str ='<div id="bodychamcong"><form action="" method="POST">';
    $result=$con->query($sql);
    while($data = $result->fetch_assoc()){
    $str .= '<input type="checkbox" name="arr[]" value="'.$data["Manhanvien"].'">
    <label for="cat_1">'.$data["Tennhanvien"].'</label><br/><br/>';
    }
    $str .='<input type="submit" name="add_post" value="Chốt Chấm Công Ngày">
    <input type="button"  id="add_post_month" value="Chốt Chấm Công Tháng"></form>';
    echo $str;
    }
else{ 
    session_start();
    require("../Ketnoi.php");
    $con=Ketnoi();

  
            mysqli_set_charset($con, 'UTF8');
    
    $str ='<br /><div id="bodychamcong"><form action="" method="POST">';
    $ngay=$_POST["ngay"];
    if($ngay != 1){
    $_SESSION['ngay']=$ngay;
    $sql="select tblnhanvien.Manhanvien,tblnhanvien.Tennhanvien,tblchamcong.$ngay from tblnhanvien,tblchamcong where tblnhanvien.Manhanvien=tblchamcong.Manhanvien";
    $str ='<form action="xlchamcong.php" method="POST">';
    $result=$con->query($sql);
    while($data = $result->fetch_assoc()){
        if($data["$ngay"] == 1){
            $str .= '<input type="checkbox" name="arr[]" value="'.$data["Manhanvien"].'" checked>
            <label for="cat_1">'.$data["Tennhanvien"].'</label><br/><br/>';
        }
        else{
            $str .= '<input type="checkbox" name="arr[]" value="'.$data["Manhanvien"].'">
            <label for="cat_1">'.$data["Tennhanvien"].'</label><br/><br/>';
        }
    }
    $str .='<input type="submit" name="add_post" value="Chốt Chấm Công Ngày">
    <input type="button" id="add_post_month" value="Chốt Chấm Công Tháng"></form></div>';
    echo $str;}
}
?>