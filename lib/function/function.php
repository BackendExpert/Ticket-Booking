<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function book_ticket($nic, $email, $sn, $fn, $ln){
        $con = Connection();

        // echo $nic."<br>";
        // echo $email."<br>";
        // echo $sn."<br>";
        // echo $fn."<br>";
        // echo $ln."<br>";

        $insert_data = "INSERT INTO user_tbl(nic,email,sname,fname,lname)VALUES('$nic','$email','$sn','$fn','$ln')";
        $insert_data_result = mysqli_query($con, $insert_data);

        header("location:../user_data.php");
    }
?>