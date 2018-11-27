<?php
$nama="Firmansyah Maulana";
$usia=27;
$nilai=82.90;
$status=TRUE;
$Hobi=array("Futsal","Gaming");

echo "Nama : ".$nama."<br>";
echo "Usia : ".$usia."<br>";
echo "Nilai : ".$nilai."<br>";
if ($status) {
    echo $Hobi['0'];
} 
else {
    echo $Hobi['1'];
}
?>