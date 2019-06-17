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
					<td><a href="xulysua.php?id='.$data["Mahanghoa"].'&ncc='.$data["Manhacungcap"].'&mota='.$data["Mota"].'&sl='.$data["Soluong"].'&gia='.$data["Gia"].'&ngay='.$data["Ngay"].'&tenhh='.$data["Tenhanghoa"].'">sua</a></td>
					<td><a href="xoakho.php?id='.$data["Mahanghoa"].'" class="btnxoa">Xóa</a></td>	
				</tr>';
				}
				$str1 .='</table>';
                echo $str1;
        }
        else{
        $tennv = $_POST["tennv"];
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
                $resul=$con->query("select nk.Mahanghoa, nk.Manhacungcap,nk.Mota,nk.Soluong,nk.Gia,nk.Ngay,k.Tenhanghoa from tblkho k inner join tblnhapkho nk on k.Mahanghoa =nk.Mahanghoa  inner join tblnhacungcap nc on nc.Manhacungcap=nk.Manhacungcap where k.Tenhanghoa like '".$tennv."%'");
                while($data = $resul->fetch_assoc()){
                    $str1 .='<tr>
                    <td>'.$data["Mahanghoa"].'</td>
                    <td>'.$data["Manhacungcap"].'</td>
                    <td>'.$data["Mota"].'</td>
                    <td>'.$data["Soluong"].'</td>
                    <td>'.$data["Gia"].'</td>  
                    <td>'.$data["Ngay"].'</td>
                    <td>'.$data["Tenhanghoa"].'</td>
                    <td><a href="xulysua.php?id='.$data["Mahanghoa"].'&ncc='.$data["Manhacungcap"].'&mota='.$data["Mota"].'&sl='.$data["Soluong"].'&gia='.$data["Gia"].'&ngay='.$data["Ngay"].'&tenhh='.$data["Tenhanghoa"].'">sua</a></td>
                    <td><a href="xoakho.php?id='.$data["Mahanghoa"].'" class="btnxoa">Xóa</a></td>  
                </tr>';
                }
                $str1 .='</table>';
                echo $str1;
        }
?>