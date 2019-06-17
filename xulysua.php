<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "dbmshtquanlynhahangg";
$conn = mysqli_connect($hostname, $username, $password,$dbname);
mysqli_set_charset($conn,'UTF8');

if(isset($_POST["tenhh"])){
	$mahh = $_POST["mahh"];
	$mancc = $_POST["mancc"];
	$mota = $_POST["mota"];
	$soluong = $_POST["soluong"];
	$gia = $_POST["gia"];
	$ngay = $_POST["ngay"];
	$tenhh = $_POST["tenhh"];

	$sSql = "UPDATE `tblnhapkho` SET `tenhh`='".$tenhh."',`Mota`='".$mota."',`Manhacungcap`='".$mancc."',`Soluong`=".$soluong.",`Gia`=".$gia.",`Ngay`='".$ngay."' WHERE mahanghoa='".$mahh."' and Manhacungcap='".$mancc."'";
	$conn->query($sSql);
	header("location: suakho.php");
}
?>
<form style="text-align: center;" action="xulysua.php" method="post" accept-charset="utf-8">
	
	
	<table align="center">
		<input style="position: absolute;z-index: -1;opacity: 0" type="text" name="mancc" value="<?php echo $_GET["ncc"] ?>">
		<input style="position: absolute;z-index: -1;opacity: 0" type="text" name="mahh" value="<?php echo $_GET["id"] ?>">

		<caption>Sửa thông tin:</caption>
		<tbody>
			<tr>
				<td>Tên hàng hóa:</td>
				<td><input type="text" name="tenhh" value="<?php echo $_GET["tenhh"] ?>"></td>
			</tr>
			<tr>
				<td>Mô tả</td>
				<td><input type="text" name="mota" value="<?php echo $_GET["mota"] ?>"></td>
			</tr>
			<tr>
				<td>Số lượng:</td>
				<td><input type="text" name="soluong" value="<?php echo $_GET["sl"] ?>"></td>
			</tr>
			<tr>
				<td>Giá:</td>
				<td><input type="text" name="gia" value="<?php echo $_GET["gia"] ?>"></td>
			</tr>
			<tr>
				<td>Ngày:</td>
				<td><input type="text" name="ngay" value="<?php echo $_GET["ngay"] ?>"></td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="2"><input type="submit" name="" value="Sửa"></td>
			</tr>
		</tbody>
	</table>
</form>