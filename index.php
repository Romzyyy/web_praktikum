<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
        <h1>Daftar Menu</h1>
        <table method="post">
            <tr class="upper">
                <td>Menu</td>
                <td>Nama</td>
                <td>Harga</td>
            </tr>
            <tr>
                <td><img src="img/nasigoreng.jpg" /></td>
                <td>nasi goreng</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td><img src="img/burger.jpg" /></td>
                <td>Burger</td>
                <td>15.000</td>
            </tr>
            <tr>
                <td><img src="img/sapgeti.jpg" /></td>
                <td>Spageti</td>
                <td>25.000</td>
            </tr>
        </table>
    </div>
    <form action="kasir.php" method="post"> 
        <table>
            <tr>
                <td>Pilih Menu</td>
                <td>:</td>
                <td>
                    <?php
                $nama_barang = array('nasi goreng', 'Burger', 'Spageti');
                ?>
                    <select name="nama_barang">
                        <?php
                            foreach($nama_barang as $item){
                              echo "<option value='$item'>$item</option>";
                         }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" placeholder="Masukan harga"></td>
            </tr>
            <tr>
                <td>Jumlah Porsi</td>
                <td>:</td>
                <td><input type="number" name="jumlah" placeholder="Masukan jumlah porsi"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="center"><input type="submit" name="simpan" value="Submit" class="submit"></td>
            </tr>
        </table>
    </form>
    <footer>
        <div class="footername">
            <h1>&copy; Copyright create by Romzyyy</h1>
        </div>
    </footer>
</body>

</html>
