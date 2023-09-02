<?php 
$conn = mysqli_connect("localhost","root","","db_lawndry");
$result = mysqli_query($conn, "SELECT * FROM pelanggan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="">
    <h1>Pelanggan</h1>
    <table border = "1" cellpading = "10" cellspacing= "0">
        <tr>
            <th>No. Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>No. Telephone</th>
            <th>Alamat</th>
        </tr>

        <?php $i=0; ?>
        <?php while ($plgn = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $plgn["nopel"]; ?></td>
            <td><?php echo $plgn["nama"]; ?></td>
            <td><?php echo $plgn["notelp"]; ?></td>
            <td><?php echo $plgn["alamat"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile ?>
    </table>
    <p><a href="index.php">Kembali Ke Index</a> </p>
</form>
</body>
</html>