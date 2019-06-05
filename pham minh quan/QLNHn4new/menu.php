<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" />
    <script type="text/javascript" src="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script src="main.js"></script>
    <script>
     $(document).ready(function(e) {
        $(".mua").click(function(){
               var mamon=$(this).attr("stt");
               var ban=$(this).attr("ban");
            //    alert("hello"+mamon);      
               var gia=$(this).attr("gia");
              $.post("session.php",{ban:ban,mamon:mamon,gia:gia},function(data){    
              });
              location.reload("menu.php?id=");
            });
     });
    </script>
</head>
<body>
<?php
$ban=$_GET["id"];
?>
<div>
    <h1>mon1</h1>
    <button type="button" class="mua" stt="1" gia="10000" ban="<?php echo $ban;?>" values="mua">mua</button>
</div>

<div>
    <h1>mon2</h1>
    <button type="button" class="mua" stt="2" gia="20000" ban="<?php echo $ban;?>" values="mua">mua</button>
</div>
<?php
$ban='ban'.$ban;
session_start();
if(isset($_SESSION["car"]["$ban"]))
{
    $str='<table><tr><th>ma</th><th>gia</th></tr>';
    foreach($_SESSION["car"]["$ban"] as $key => $valu){
        $str .='<tr><td>'.$valu["mamon"].'</td><td>'.$valu["gia"].'</td></tr>';
    }
    $str .='</table>';
    echo $str;
}
?>
</body>
</html>