<?php
    $servername = "127.0.0.1";
    $username = "vmanz73";
    $password = "Vmanz@1997";
    $dbname = "LatihanWeb";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn){
        die ("Connection Fail :".mysqli_connect_error());

    }
    $sql = "INSERT INTO account (firstname,lastname,email) VALUES ('Firmansyah','Maulana','Firmansyah@vman.com')";
    
    if (mysqli_query($conn, $sql)) {
        echo "data berhasil di buat";
    } else {
        echo "Error : ".$sql."<br>" . mysqli_error($conn);  
    }

    mysqli_close($conn);
?>