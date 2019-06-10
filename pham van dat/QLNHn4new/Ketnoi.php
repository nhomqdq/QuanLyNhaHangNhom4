 <?php 
   function ketnoi(){
       $hostname = 'localhost';
       $username = 'root';
        $password = '';
        $dbname = "dbmshtquanlynhahangg";
        $conn = mysqli_connect($hostname, $username, $password,$dbname);
        return $conn;
    }
?>
 
