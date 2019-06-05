<?php
        include("../connect.php");
        $con=connect();    
        $thang='thang'.date("mY");
        //echo $thang;
        $con->query("Alter table tblcongthang add ".$thang." int");
        $resu=$con->query("select * from tblchamcong");
        while($data= $resu->fetch_assoc()){
            $tongngay=0;
            for($i=1;$i<=31;$i++){
                $ngay='ngay'.$i;
                $tongngay = $tongngay + $data["$ngay"]; 
            } 
            $sqlupdate = "update tblcongthang set tblcongthang.".$thang." = ".$tongngay." where tblcongthang.Manhanvien = ".$data['Manhanvien'];
            $con->query($sqlupdate);
            $con->query("delete from tblchamcong");
            $con->query("insert into tblchamcong(Manhanvien) select Manhanvien from tblnhanvien");
        }
?>