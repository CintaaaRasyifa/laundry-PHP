<?php 
$conn = mysqli_connect("localhost", "root", "", "db_lawndry");

if (isset($_POST['submit'])) {
    
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO pelanggan VALUES ('', '$nama', '$notelp', '$alamat')";

    if (mysqli_query($conn, $query)) {
        header("Location: selamat.php");
        exit();
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laundry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h4> Isi List dibawah ini : </h4>
        <br>
        <ul>
            <li>
               <label> Nama Pelanggan </label>
                <input type="text" name="nama" placeholder="Masukkan Nama Anda" required> 
            </li>
            <li>
               <label> No Telephone </label>
                <input type="text" name="notelp" placeholder="Masukkan Nomor Anda" required> 
            </li>
            <li>
               <label> Alamat Lengkap </label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat Anda" required> 
            </li>
            <li>
                <button type="submit" name="submit"> Kirim Data </button>
            </li>
        </ul>
        <br>
        <br>
        <p><a href="index.php">Kembali Ke Index</a> </p>
    </form>
</body>
</html>
