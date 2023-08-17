<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Berkah Food</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

    <body>

        <!-- Bagian header -->
        <header class="atas">
            <h1>Sistem Informasi Penjualan BerkahFood</h1>
        </header>
    
        <h1>Order Disini Ya!</h1>

        <form action="order.php" method="post">
            <table>
                <tr>
                    <td>Nama Makanan</td>
                    <td>: 
                        <?= $_GET['nm'] ?>
                        <input type="hidden" name="nama_makanan" value="<?= $_GET['nm'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Satuan</td>
                    <td>: 
                        <?= $_GET['satu'] ?>
                        <input type="hidden" name="satuan" value="<?= $_GET['satu'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: 
                        <?= $_GET['hrg'] ?>
                        <input type="hidden" name="harga" value="<?= $_GET['hrg'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td><input type="number" name="qty" id=""></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="button button1">Order</button></td>
                </tr>
            </table>
        </form>

        <?php
        if (@($_POST)) {
            $file_json = file_get_contents('database/order.json');
            $data_order = json_decode($file_json, true);

            foreach ($data_order as $key => $value) {
                $_data_order [] = [
                    'nama_makanan' => $value['nama_makanan'],
                    'harga' => $value['harga'],
                    'satuan' => $value['satuan'],
                    'nama' => $value['nama'],
                    'qty' => $value['qty'],
                ];
            }
            $_data_order[] = [
                'nama_makanan' => $_POST['nama_makanan'],
                'harga' => $_POST['harga'],
                'satuan' => $_POST['satuan'],
                'nama' => $_POST['nama'],
                'qty' => $_POST['qty'],
            ];

            $new_order = json_encode($_data_order, JSON_PRETTY_PRINT);

            $file= fopen ('database/order.json', 'w');
            fwrite($file, $new_order);
            fclose($file);
            header ('Location: transaksi.php');
        }
        ?>

        <!-- Bagian footer -->
        <footer class="bawah">
            <h2 class="kontak">Hubungi Kami</h2>
            <h3 class="call"><i class="material-icons" style="font-size:28px">phone_in_talk</i> 08234567821</h3>
            <h3 class="email"><i class="material-icons" style="font-size:28px">mail</i> berkahfood@gmail.com</h3>
        </footer>

    </body>
</html>