<?php 
// Menyeleksi inputan nama 
if (empty($_POST['nama'])) {
    header("Location:Kosong.php");
} else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>