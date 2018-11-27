<?php
    $servername = "127.0.0.1";
    $username = "vmanz73";
    $password = "Vmanz@1997";
    $dbname = "LatihanWeb";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn){
        die ("Connection Fail :".mysqli_connect_error());

    }
    $sql = "SELECT * FROM account";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)) {
            echo "id : ".$row['id']."<br>";
            echo "Firsname :". $row['firstname']. "<br>";
            echo "Lastname : ". $row['lastname']. "<br>";
            echo "email : ". $row['email']. "<br>";
            echo "<hr>";
        
        }
    }
    else {
        echo "0 result";
    }
    

    mysqli_close($conn);
?>