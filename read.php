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
            <!-- Navigasi Top Bar -->
            <ul class="navbar">
                <li><a href="read.php">Menu</a></li>
                <li><a href="transaksi.php">Transaksi</a></li>
                <li><a href="readme.php">Tentang Kami</a></li>
            </ul>

            <div>
                <img src="images/food.jpg" alt="BerkahFood" class="img-fluid">
            </div>

            <h1 align="center" style="color:darkmagenta">Daftar Menu</h1>
            <h3 align="center">Kebahagiaanmu ada pada nutrisi makanan mu</h3>

            <div class="gallery">
                <img src="images/dessert.jpg" alt="Cake" width="600" height="400">
                <div class="desc">Grapes Cake</div>
            </div>
            <div class="gallery">
                <img src="images/nasgor.jpg" alt="nasgor" width="600" height="600">
                <div class="desc">Nasi Goreng</div>
            </div>
            <div class="gallery">
                <img src="images/ayam.jpg" alt="ayam" width="600" height="400">
                <div class="desc">Ayam Goreng</div>
            </div>
        
            <div class="kata">
                <p>Hai Fooders....</p>
                <p>BerkahFood menyediakan berbagai menu makanan kebutuhan kamu</p>
                <p>Cari dan temukan makananmu disini. Jangan lupa order ya!</p>
                <p>Kepuasan anda adalah tanggung jawab kami</p>
            </div>
            
            <a href="add.php" class="button button1" style="margin: 0 20px;">Tambah Data Makanan</a>

            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>Nama Makanan</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Mau pesan?</th>
                </tr>

                <?php
                $file_json = file_get_contents('database/dbmakanan.json');
                $data_makanan = json_decode($file_json, true);

                $no = 1;
                foreach ($data_makanan as $key => $value) {
                    # code...
                ?>
                    <tr>
                        <td><?=$no ?></td>
                        <td><?=$value['nama_makanan'] ?></td>
                        <td><?=$value['satuan'] ?></td>
                        <td><?=$value['harga'] ?></td>
                        <td><a href="order.php?nm=<?= $value['nama_makanan'] ?>&hrg=<?= $value['harga'] ?>&satu=<?= $value['satuan']?>">Order</a></td>
                    </tr>
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