<html>
    <title>Form Input Latihan 1</title>
    <body>
    <!-- Form untuk mendapatkan input yang akan ditampilkan di file lain -->
        <form method="POST" action="Tampilan1.php">
        <h1> Form Login </h1>
            <table>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="inputnama"></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="inputemail"></td>
                </tr>
            </table>
            <br>
            <!-- Button untuk mensubmit -->
            <input type="submit" name="btnlogin" value="Submit" >
        </form>
    </body>
</html>