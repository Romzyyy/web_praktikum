<?php
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$hasil = $harga * $jumlah;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/kasir.css">
</head>

<body>
    <header>
        <div class="headname">
            <h1>FoodCourt SI B</h1>
        </div>
        <div class="headimg">
            <img src="img/logo.png" />
        </div>
    </header>
    <div class="content">
        <h1>Note Transaction</h1>
        <table>
            <tr>
                <td>Total yang harus anda bayarkan adalah : <?php echo $hasil; ?></td>
            </tr>
            <tr>
                <td><button><a href="index.php">Kembali</a></button></td>
            </tr>
        </table>
    </div>
    <footer>
        <div class="footername">
            <h1>&copy; Copyright create by Romzyyy</h1>
        </div>
    </footer>
</body>

</html>