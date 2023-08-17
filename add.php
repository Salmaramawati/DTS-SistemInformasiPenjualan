<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Makanan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <!-- Bagian header -->
    <header class="atas">
        <h1>Sistem Informasi Penjualan BerkahFood</h1>
    </header>

    <h1>Ayo Tambah Data Makanan Disini!</h1>

    <form action="add.php" method="post">
        <table>
            <tr>
                <td>Nama Makanan</td>
                <td><input type="text" name="nama_makanan" id="nama_makanan"></td>
            </tr>        
            <tr>
                <td>Satuan</td>
                <td><input type="text" name="satuan" id="satuan"></td>
            </tr>        
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" id="harga"></td>
            </tr> 
            <tr>
                <td><input type="submit" value="Tambah" class="button button1"></td>
            </tr>
        </table>
    </form>

    <?php
    if (@($_POST)) {
        $file_json = file_get_contents('database/dbmakanan.json');
        $data_makanan = json_decode($file_json, true);

        foreach ($data_makanan as $key => $value) {
            $_data_makanan [] = [
                'nama_makanan' => $value['nama_makanan'],
                'satuan' => $value['satuan'],
                'harga' => $value['harga'],
            ];
        }
        $_data_makanan[] = [
            'nama_makanan' => $_POST['nama_makanan'],
            'satuan' => $_POST['satuan'],
            'harga' => $_POST['harga'],
        ];

        $new_makanan = json_encode($_data_makanan, JSON_PRETTY_PRINT);

        $file= fopen ('database/dbmakanan.json', 'w');
        fwrite($file, $new_makanan);
        fclose($file);
        header ('Location: read.php');
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