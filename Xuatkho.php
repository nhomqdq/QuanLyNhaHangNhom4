<?php
require('Classes/PHPExcel.php');
require ('Ketnoi.php');
if(!isset($_POST['btnExport'])){
	$mysqli = ketnoi();
	$objExcel =  new PHPExcel;                                                              
	$objExcel->setActiveSheetIndex(0);
	$sheet=$objExcel->getActivesheet()->setTitle('tblkho');
	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'Mã hàng hóa');
	$sheet->setCellValue('B'.$rowCount,'Mã Nhà Cung cấp');
	$sheet->setCellValue('C'.$rowCount,'Mô Tả');
	$sheet->setCellValue('D'.$rowCount,'Số lượng');
	$sheet->setCellValue('E'.$rowCount,'Gía');
	$sheet->setCellValue('F'.$rowCount,'Ngày');
	$sheet->setCellValue('G'.$rowCount,'Công Ty');
	$sheet->setCellValue('H'.$rowCount,'Tên hàng hóa');
	$sheet->setCellValue('I'.$rowCount,'Thành tiền');
	$result=$mysqli->query('SELECT  tblkho.Mahanghoa,tblnhacungcap.Manhacungcap,tblnhapkho.Mota,tblnhapkho.Soluong,tblnhapkho.Gia,tblnhapkho.Ngay,tblkho.Tenhanghoa,tblnhacungcap.Congty,(tblnhapkho.Soluong*tblnhapkho.Gia) AS Thanhtien from tblnhapkho join tblnhacungcap on tblnhacungcap.Manhacungcap = tblnhapkho.Manhacungcap join tblkho on tblkho.Mahanghoa=tblnhapkho.Mahanghoa');
	$rowCount++;
	while($row = mysqli_fetch_array($result)){
		$sheet->setCellValue('A'.$rowCount,$row['Mahanghoa']);
		$sheet->setCellValue('B'.$rowCount,$row['Manhacungcap']);
		
		$sheet->setCellValue('C'.$rowCount,$row['Mota']);
		$sheet->setCellValue('D'.$rowCount,$row['Soluong']);
		
		$sheet->setCellValue('E'.$rowCount,$row['Gia']);
		
		$sheet->setCellValue('F'.$rowCount,$row['Ngay']);
		
		$sheet->setCellValue('G'.$rowCount,$row['Tenhanghoa']);
		$sheet->setCellValue('H'.$rowCount,$row['Congty']);
		$sheet->setCellValue('I'.$rowCount,$row['Thanhtien']);
		$rowCount++;

	}
	$object = new PHPExcel_Writer_Excel2007($objExcel);
	$filename='export.xlxs';
	$object->save($filename);
	header('Conten-Disposition:attachment;filename="'.$filename."'");
	header('Content-Type:application/vnd.openxmlformatsofficedocument.spreadsheerml.sheet');
	// header('Content-Type:application/vnd.ms-excel');
	header('Conten-Length:'.filesize($filename));
	header('Content-Transfer-Encoding:binary');
	header('Cache-Control:must-revalidate');
	header('Pragma: no-cache');
	readfile($filename);
	$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
	$objWriter->save('export.xlsx');
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Export data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST">
		<button name="btnExport" type="submit">Xuất File</button>
	</form>
</body>
</html>