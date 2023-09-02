<?php 
$conn = mysqli_connect("localhost","root","","db_lawndry");

if (isset($_POST['submit'])) {

    $tanggal = $_POST['tanggal'];
    $selesai = $_POST['selesai'];
    $berat = $_POST['berat'];
    $total = $_POST['total'];

    $query = "INSERT INTO melaundry Values
    ('','$tanggal','$selesai','$berat','$total')";

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
    <h4> Tolong Isi List dibawah ini : </h4>
    <br>
        <ul>
            <li>
               <label> Tanggal Setor </label>
                <input type="date" name="tanggal" placeholder="Tanggal Hari ini: " required="";></input> 
            </li>
            <li>
               <label> Tanggal Selesai </label>
                <input type="date" name="selesai" placeholder="Perkiraan Selesai: " required="";></input> 
            </li>
            <li>
               <label> Berat  </label>
                <input type="text" name="berat" placeholder="Berat Laundry Anda: " required="";></input> 
            </li>
            <li>
               <label> Nominal Total </label>
                <input type="text" name="total" placeholder="Nominal Total Yang Harus Dibayar: " required="";></input> 
            </li>
            <button type="submit" name="submit"> Kirim Data </button> 
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p><a href="index.php">Kembali Ke Index</a> </p>
    </form>
</body>
</html>
