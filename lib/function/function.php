<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function book_ticket($nic, $email, $sn, $fn, $ln){
        $con = Connection();

        echo $nic."<br>";
        echo $email."<br>";
        echo $sn."<br>";
        echo $fn."<br>";
        echo $ln."<br>";
    }
?>