<?php
date_default_timezone_set('Asia/Jakarta'); 
// Menyeleksi inputan
if (empty($_POST['inputnama'] && $_POST['inputemail'])) {
    header("Location:Redirectlat2.php");
} else {
    echo "<center>Nama :".$_POST['inputnama']."</center><br>";
    echo "<center>Email :".$_POST['inputemail']."</center><br>";
    echo "<center> Anda login pada :" .date("d-F-Y")."</center>";
    echo "<center> Pada jam :" .date("H:i:s"). "</center>"; 
}
?>