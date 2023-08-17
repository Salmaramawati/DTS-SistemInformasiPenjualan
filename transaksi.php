<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Penjualan</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <!-- Bagian header -->
        <header class="atas">
            <h1>Sistem Informasi Penjualan BerkahFood</h1>
        </header>

        <!-- Bagian section -->
        <section>
            <ul class="navbar">
                <li><a href="read.php">Menu</a></li>
                <li><a href="transaksi.php">Transaksi</a></li>
                <li><a href="readme.php">Tentang Kami</a></li>
            </ul>

            <h1 align="center">Lihat Transaksimu Disini ya!</h1>

            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Total Harga</th>
                </tr>

                <?php
                include_once('func/php-function.php');
                $file_json = file_get_contents('database/order.json');
                $data_order = json_decode($file_json, true);

                $no = 1;
                foreach ($data_order as $key => $value) {
                    # code...
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['nama_makanan'] ?></td>
                        <td><?= $value['harga'] ?> / <?= $value['satuan'] ?></td>
                        <td><?= $value['qty'] ?></td>
                        <td><?= hitung($value['qty'], $value['harga'], 'kali') ?></td>
                <?php
                    $no++;
                }
                ?>
            </table>
        </section>

        <!-- Bagian footer -->
        <footer class="bawah">
            <h2 class="kontak">Hubungi Kami</h2>
            <h3 class="call"><i class="material-icons" style="font-size:28px">phone_in_talk</i> 08234567821</h3>
            <h3 class="email"><i class="material-icons" style="font-size:28px">mail</i> berkahfood@gmail.com</h3>
        </footer>
    </body>
</html>