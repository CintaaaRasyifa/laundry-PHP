<?php 
$conn = mysqli_connect("localhost","root","","db_lawndry");

if (isset($_POST['submit'])) {
    
    $nama = $_POST['nama'];

    $query = "INSERT INTO pakaian Values
    ('','$nama')";

    if (mysqli_query($conn,$query)) {
    header("Location: http://localhost/laundry/selamat.php");
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
    <form action="" method="post">
    <h1> Laundry Buatan Rasya Sasikirana </h1>
    <h4> Tolong Isi List dibawah ini : </h4>
    <br>
        <ul>
            <li>
               <label> Nama Pakaian </label>
                <input type="text" name="nama" placeholder="Jenis Pakaian" required=""></input> 
            </li>
            <button type="submit" name="submit"> Kirim Data </button>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p><a href="index.php">Kembali Ke Index</a> </p>
    </form>
</body>
</html>
