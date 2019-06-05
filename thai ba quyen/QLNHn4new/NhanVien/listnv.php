<?php
    if(!isset($_POST["tennv"])){
        require("connect.php");
        $con=connect();  

    	mysqli_set_charset($con, 'UTF8');
		$str1='<table class="table table-striped">
				<tr>
					<th scope="col">tên</th>
					<th scope="col">ngày sinh</th>
					<th scope="col">Giới Tính</th>
					<th scope="col">Địa chỉ</th>
					<th scope="col">Sdt</th>  
					<th scope="col">mã ca</th>
					<th scope="col">hệ số lương</th>
					<th scope="col">Chức Vụ</th>
					<th scope="col">ngày bắt đầu</th>
					<th scope="col">Tiền lương</th>
					<th scope="col">sửa</th>
					<th scope="col">xóa</th>
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
					<td><a href="NhanVien/luongthang.php">lương tháng</a></td>
					<td><a href="NhanVien/suanv.php?id='.$data["Manhanvien"].'">sua</a></td>
					<td><button type="button" stt="'.$data["Manhanvien"].'" class="btnxoa">Xóa</button></td>	
				</tr>';
				}
				$str1 .='</table>';
                echo $str1;
        }
        else{      
            $str1='<table class="table table-striped">
            <tr>
                <th scope="col">tên</th>
                <th scope="col">ngày sinh</th>
                <th scope="col">Giới Tính</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Sdt</th>  
                <th scope="col">mã ca</th>
                <th scope="col">hệ số lương</th>
                <th scope="col">Chức Vụ</th>
                <th scope="col">ngày bắt đầu</th>
                <th scope="col">Tiền lương</th>
                <th scope="col">sửa</th>
                <th scope="col">xóa</th>
            </tr>';
            $ten=$_POST["tennv"];
            include("../connect.php");
            $con=connect();

            mysqli_set_charset($con,'UTF8');
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
                <td><a href="NhanVien/suanv.php?id='.$data["Manhanvien"].'">sua</a></td>
                <td><button type="button" stt="'.$data["Manhanvien"].'" class="btnxoa">Xóa</button></td>	
            </tr>';
            }
            $str1 .='</table>';
            echo $str1;
        }
?>