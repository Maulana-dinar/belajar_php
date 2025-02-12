<?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $divisi = $_POST['divisi'];
        $gaji_perbulan = $_POST['gaji_perbulan'];
        $npwp = $_POST['npwp'];


        $gaji_tahunan = $gaji_perbulan * 12;

        $kena_pajak = $gaji_tahunan > 54000000;
        $potongan_pajak = 0;    

        if ($kena_pajak) {
            if ($npwp == "ya") {
                $potongan_pajak = $gaji_tahunan * 0.15;
            } else {
                $potongan_pajak = $gaji_tahunan * 0.20;
            }
        }

        $gaji_bersih_tahunan = $gaji_tahunan - $potongan_pajak;
        $gaji_bersih_perbulan = $gaji_bersih_tahunan / 12;

        
    
        echo "<h2>Hasil Perhitungan</h2>";
        echo "Nama Karyawan: <b>$nama</b><br>";
        echo "Divisi: <b>$divisi</b><br>";
        echo "Total Gaji Kotor Per Tahun: <b>Rp " . number_format($gaji_tahunan, 0, ',', '.') . "</b><br>";
        echo "Potongan Pajak: <b>Rp " . number_format($potongan_pajak, 0, ',', '.') . "</b><br>";
        echo "Gaji Bersih Per Bulan: <b>Rp " . number_format($gaji_bersih_perbulan, 0, ',', '.') . "</b><br>";

    }
    ?>