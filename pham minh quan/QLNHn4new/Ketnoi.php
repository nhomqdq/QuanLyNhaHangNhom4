<?php  
   function ketnoi(){
        $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $database="dbmshtquanlynhahangg";
      

       $conn = new mysqli($servername, $username, $password, $database);
       return $conn;
      }
       ?>