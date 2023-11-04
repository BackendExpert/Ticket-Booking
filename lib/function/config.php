<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "e_ticketing_db";

        $con = mysqli_connect($server, $user, $pass, $db);
        
        $result = (!$con)
    }

?>