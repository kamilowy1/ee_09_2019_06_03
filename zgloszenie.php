<?php
// utworzenie zmiennych

$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "wedkarstwo1";

$conn = mysqli_connect($server,$user,$passwd,$dbname);

//sprawdzenie polaczenia

if (!$conn){
    die ("fatal error:".mysqli_error($conn));
} echo "jest okej";

//pobranie wartosci z formularza

$lowisko = $_POST['lowisko'];
echo $lowisko;

$data = $_POST['data'];
echo $data;

$sedzia = $_POST['sedzia'];
echo $sedzia;

$sql = "INSERT INTO `zawody_wedkarskie` VALUES ('NULL','0','$lowisko','$data','$sedzia');";

if (mysqli_query($conn,$sql)){
    echo "Poprawnie wstawiono dane do bazy";
} else {
    echo "błąd".mysqli_error($conn);
}



?>