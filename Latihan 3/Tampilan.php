<?php 
// Menampilkan teks
echo "<table border=1 align=center>";
echo "<center><h1>Biodata Saya</h1></center>";
echo "<tr><td>Nama : </td><td><center>".$_POST['inputnama']."</center></td></tr>";
echo "<tr><td>NPM : </td><td><center>".$_POST['inputnpm']."</center></td></tr>";
echo "<tr><td>TTL : </td><td><center>".$_POST['inputttl']."</center></td></tr>";
echo "<tr><td>Jenis Kelamin : </td><td><center>".$_POST['inputjk']."</center></td></tr>";
echo "<tr><td>Agama : </td><td><center>".$_POST['inputagama']."</center></td></tr>";
echo "<tr><td>Alamat : </td><td><center>".$_POST['inputalamat']."</center></td></tr>";
echo "<tr><td>Nomor Telepon : </td><td><center>".$_POST['inputtelepon']."</center></td></tr>";
echo "</table>";
?>