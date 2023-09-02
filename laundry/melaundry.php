<?php 
$conn = mysqli_connect("localhost","root","","db_lawndry");
$result = mysqli_query($conn, "SELECT * FROM melaundry");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="">
    <h1>Melaundry</h1>
    <table border = "1" cellpading = "10" cellspacing= "0">
        <tr>
            <th>No. Order</th>
            <th>Tanggal Order</th>
            <th>Tanggal Selesai</th>
            <th>Berat (kg)</th>
            <th>total</th>
        </tr>

        <?php $i=1; ?>
        <?php while ($order = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $order["no"]; ?></td>
            <td><?php echo $order["tanggal"]; ?></td>
            <td><?php echo $order["selesai"]; ?></td>
            <td><?php echo $order["berat"]; ?></td>
            <td><?php echo $order["total"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile ?>
    </table>
    <p><a href="index.php">Kembali Ke Index</a> </p>
    </form>
    
</body>
</html>