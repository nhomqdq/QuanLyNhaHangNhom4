<?php
    if(!isset($_POST["tennv"])){
        require("Ketnoi.php");
        $con=Ketnoi(); 
        mysqli_set_charset($con, 'UTF8'); 
		$str1='<table class="table table-striped">
				<tr>
					<th scope="col">TÊN</th>
					<th scope="col">NGÀY SINH</th>
					<th scope="col">GIỚI TÍNH</th>
					<th scope="col">ĐỊA CHỈ</th>
					<th scope="col">SỐ ĐIỆN THOẠI</th>  
					<th scope="col">MÃ CA</th>
					<th scope="col">HỆ SÔ LƯƠNG</th>
					<th scope="col">CHỨC VỤ</th>
					<th scope="col">NGÀY BẮT ĐẦU</th>
					<th scope="col">TIỀN LƯƠNG</th>
					<th scope="col">SỬA</th>
					<th scope="col">XÓA</th>
				</tr>';
				$resul=$con->query("select * from tblnhanvien");
				while($data = $resul->fetch_assoc()){
					$str1 .='<tr>
					<td>'.$data["Tennhanvien"].'</td>
					<td>'.$data["Ngaysinh"].'</td>
					<td>'.$data["Gioitinh"].'</td>
					<td>'.$data["Diachi"].'</td>
					<td>'.$data["Sodienthoai"].'</td>  
					<td>'.$data["Maca"].'</td>
					<td>'.$data["hesoluong"].'</td>
					<td>'.$data["Chucvu"].'</td>
					<td>'.$data["Ngaybatdau"].'</td>
					<td><a href="NhanVien/luongthang.php">LƯƠNG THÁNG</a></td>
					<td><a href="NhanVien/suanv.php?id='.$data["Manhanvien"].'">SỬA</a></td>
					<td><button type="button" stt="'.$data["Manhanvien"].'" class="btnxoa">XÓA</button></td>	
				</tr>';
				}
				$str1 .='</table>';
                echo $str1;
        }
        else{      
            $str1='<table class="table table-striped">
            <tr>
            <th scope="col">TÊN</th>
            <th scope="col">NGÀY SINH</th>
            <th scope="col">GIỚI TÍNH</th>
            <th scope="col">ĐỊA CHỈ</th>
            <th scope="col">SỐ ĐIỆN THOẠI</th>  
            <th scope="col">MÃ CA</th>
            <th scope="col">HỆ SÔ LƯƠNG</th>
            <th scope="col">CHỨC VỤ</th>
            <th scope="col">NGÀY BẮT ĐẦU</th>
            <th scope="col">TIỀN LƯƠNG</th>
            <th scope="col">SỬA</th>
            <th scope="col">XÓA</th>
            </tr>';
            $ten=$_POST["tennv"];
            include("../Ketnoi.php");
            $con=Ketnoi();
            mysqli_set_charset($con, 'UTF8');
            $result=$con->query("select * from tblnhanvien where Tennhanvien like'%$ten%'");
            while($data = $result->fetch_assoc()){
                $str1 .='<tr>
                <td>'.$data["Tennhanvien"].'</td>
                <td>'.$data["Ngaysinh"].'</td>
                <td>'.$data["Gioitinh"].'</td>
                <td>'.$data["Diachi"].'</td>
                <td>'.$data["Sodienthoai"].'</td>  
                <td>'.$data["Maca"].'</td>
                <td>'.$data["hesoluong"].'</td>
                <td>'.$data["Chucvu"].'</td>
                <td>'.$data["Ngaybatdau"].'</td>
                <td><a href="NhanVien/luongthang.php">lương tháng</a></td>
                <td><a href="NhanVien/suanv.php?id='.$data["Manhanvien"].'">SỬA</a></td>
                <td><button type="button" stt="'.$data["Manhanvien"].'" class="btnxoa">XÓA</button></td>	
            </tr>';
            }
            $str1 .='</table>';
            echo $str1;
        }
?>