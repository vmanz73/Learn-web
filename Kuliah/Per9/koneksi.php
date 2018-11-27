<?php
    $servername = "127.0.0.1";
    $username = "vmanz73";
    $password = "Vmanz@1997";

    $conn = mysqli_connect($servername,$username,$password);
    if (!$conn){
        die ("Connection Fail :".mysql_connect_error());

    }
    echo "connection succes";
?>