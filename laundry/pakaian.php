<?php 
$conn = mysqli_connect("localhost","root","","db_lawndry");
$result = mysqli_query($conn, "SELECT * FROM pakaian");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laundry by Rasya Sasikirana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="">
    <h1>Pakaian</h1>
    <table border = "1" cellpading = "10" cellspacing= "0">
        <tr>
            <th>Kode Pakaian</th>
            <th>Nama Pakaian</th>
        </tr>

        <?php $i=1; ?>
        <?php while ($pkn = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $pkn["kode"]; ?></td>
            <td><?php echo $pkn["nama"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile ?>
    </table>
    <p><a href="index.php">Kembali Ke Index</a> </p>
</form>
</body>
</html>