

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

            <div class="inti">
                <div class="isi">
                <?php
                $tentang_kami= fopen ('readme.txt', 'r');

                if (!$tentang_kami) {
                    # code...
                    echo "File tidak ditemukan";
                }

                while (!feof($tentang_kami)) {
                    # code...
                    echo fgets($tentang_kami).'<br>';
                }

                fclose($tentang_kami);
                ?>
                </div>
            </div>

        </section>

        <!-- Bagian footer -->
        <footer class="bawah">
            <h2 class="kontak">Hubungi Kami</h2>
            <h3 class="call"><i class="material-icons" style="font-size:28px">phone_in_talk</i> 08234567821</h3>
            <h3 class="email"><i class="material-icons" style="font-size:28px">mail</i> berkahfood@gmail.com</h3>
        </footer>
    </body>
</html>