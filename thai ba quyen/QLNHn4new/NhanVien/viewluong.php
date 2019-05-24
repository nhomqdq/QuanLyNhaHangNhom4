<?php
    $thang = $_POST["thang"];
    if($thang != 1){
    include("../connect.php");
    $con=connect();
    $re=$con->query("select tblnhanvien.Manhanvien,tblnhanvien.Tennhanvien,(tblnhanvien.hesoluong * 100000 * tblcongthang.$thang) as 'luong' FROM tblnhanvien join tblcongthang on tblcongthang.Manhanvien=tblnhanvien.Manhanvien");
    $str='<table><tr><th>Mã Nhân Viên</th><th>Ten Nhân Viên</th><th>Lương</th></tr>';
    while($data=$re ->fetch_assoc()){
        $str .= '<tr><td>'.$data["Manhanvien"].'</td><td>'.$data["Tennhanvien"].'</td><td>'.$data["luong"].'</td></tr>';
    }
    $str .= '</table>';
    echo $str;}
?>