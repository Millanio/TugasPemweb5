<html>
  <head>
    <title>Pemrograman PHP dengan Array</title>
  </head>
  <body>
    <?php
    // Penulisan array dapat dibuat seperti berikut
    $nama[] = "Indy";
    $nama[] = "Millenio";
    $nama[] = "Diez";
    echo $nama[0] . $nama[1] . $nama[2];
    echo "<br>";
    // Menghitung jumlah elemen array
    $jum_array = count($nama);
    echo "jumlah elemen array = ". $jum_array;
    ?>
  </body>
</html>