<?php
    if(!isset($_POST["tennv"])){
        require("connect.php");
        $con=connect();  
		$str1='<table class="table table-striped">
				<tr>
					<th scope="col">Mã hàng hóa</th>
					<th scope="col">Mã nhà cung cấp</th>
					<th scope="col">Mô tả</th>
					<th scope="col">Số lượng</th>
					<th scope="col">giá</th>  
					<th scope="col">Ngày</th>
					<th scope="col">Tên hàng hóa</th>
					<th scope="col">sửa</th>
					<th scope="col">xóa</th>
				</tr>';
                mysqli_set_charset($con,'UTF8');
				$resul=$con->query("select nk.Mahanghoa, nk.Manhacungcap,nk.Mota,nk.Soluong,nk.Gia,nk.Ngay,k.Tenhanghoa from tblkho k inner join tblnhapkho nk on k.Mahanghoa =nk.Mahanghoa  inner join tblnhacungcap nc on nc.Manhacungcap=nk.Manhacungcap");
				while($data = $resul->fetch_assoc()){
					$str1 .='<tr>
					<td>'.$data["Mahanghoa"].'</td>
					<td>'.$data["Manhacungcap"].'</td>
					<td>'.$data["Mota"].'</td>
					<td>'.$data["Soluong"].'</td>
					<td>'.$data["Gia"].'</td>  
					<td>'.$data["Ngay"].'</td>
					<td>'.$data["Tenhanghoa"].'</td>
					<td><a href="editkho.php?id='.$data["Mahanghoa"].'">sua</a></td>
					<td><button type="button" stt="'.$data["Mahanghoa"].'" class="btnxoa">Xóa</button></td>	
				</tr>';
				}
				$str1 .='</table>';
                echo $str1;
        }
        else{      
            $str1='<table class="table table-striped">
            <tr>
                <th scope="col">Mã hàng hóa</th>
                <th scope="col">Mã nhà cung cấp</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Số lượng</th>
                <th scope="col">giá</th>  
                <th scope="col">Ngày</th>
                <th scope="col">Tên hàng hóa</th>
               
                <th scope="col">sửa</th>
                <th scope="col">xóa</th>
            </tr>';
            $ten=$_POST["tennv"];
            include("../connect.php");
            $con=connect();
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
                <td><a href="">lương tháng</a></td>
                <td><a href="NhanVien/suanv.php?id='.$data["Manhanvien"].'">sua</a></td>
                <td><button type="button" stt="'.$data["Manhanvien"].'" class="btnxoa">Xóa</button></td>	
            </tr>';
            }
            $str1 .='</table>';
            echo $str1;
        }
?>