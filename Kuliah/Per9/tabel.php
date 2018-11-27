<?php
    $servername = "127.0.0.1";
    $username = "vmanz73";
    $password = "Vmanz@1997";
    $dbname = "LatihanWeb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn){
        die ("Connection Fail :".mysqli_connect_error());

    }
    $sql = "CREATE TABLE account (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL, email VARCHAR(50))";

    if (mysqli_query($conn,$sql)){
        echo "table telah dibuat";
    } else {
        echo "tabel gagal di buat";
    }

    mysqli_close($conn);
?>