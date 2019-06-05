<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>ĐĂNG KÍ THÀNH VIÊN</title>
    </head>
    <style>
    h1{
        text-align: center;
        style="color: red"
           }
           td{
            text-align: center;
            font-weight:bold;

           }
    </style>
    <body>
        <h1 style="color: red">TRANG CẤP TÀI KHOẢN ADMIN</h1>
        <form action="xuly.php" method="post">
        <div class="container"> 
            <table class="table" cellpadding="0" cellspacing="0" border="1">
                <tr class="success">
                    <td>
                        TÊN ĐĂNG NHẬP
                    </td>
                    <td>
                        <input type="text" name="txtUsername" size="50" />
                    </td>
                </tr>
                <tr class="danger">
                    <td>
                        MẬT KHẨU
                    </td>
                    <td>
                        <input type="password" name="txtPassword" size="50" />
                    </td>
                </tr class="warning">
                <tr>
                    <td>
                        EMAIL
                    </td>
                    <td>
                        <input type="text" name="txtEmail" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        HỌ TÊN
                    </td>
                    <td>
                        <input type="text" name="txtFullname" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                       NGÀY SINH
                    </td>
                    <td>
                        <input type="text" name="txtBirthday" size="50" />
                    </td>
                </tr>
                <tr class="active">
                    <td>
                        GIỚI TÍNH
                    </td>
                    <td>
                        <select name="txtSex">
                            <option value=""></option>
                            <option value="Nam">NAM</option>
                            <option value="Nu">NỮ</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div>
            <input type="submit"  class="btn btn-info" value="Đăng ký" />
            <input type="reset" class="btn btn-info"  value="Nhập lại" />
        </form>
    </body>
</html>