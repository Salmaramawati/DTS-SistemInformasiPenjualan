<?php  
    function hitung ($angka1, $angka2, $operasi)
        {
            switch ($operasi) {
        
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;

            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;

            case 'bagi':
                $hasil = $angka1 / $angka2;
                break;

            case 'kali':
                $hasil = $angka1 * $angka2;
                break;

            default:
            
            }
            
            return $hasil;
        }
?>