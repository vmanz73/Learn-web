<?php
    $servername = "127.0.0.1";
    $username = "vmanz73";
    $password = "Vmanz@1997";
    $dbname = "LatihanWeb";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn){
        die ("Connection Fail :".mysqli_connect_error());

    }
    $sql = "UPDATE account SET firstname='vman' WHERE id=1";

    if (mysqli_query($conn,$sql)){
        echo "berhasil update";
        }
    
    else {
        echo "gagal update";
    }
    

    mysqli_close($conn);
?>