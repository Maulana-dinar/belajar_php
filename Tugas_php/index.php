<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

          define ('GAJI_POKOK', 5000000 );
          define ('BONUS', 500000);
          define ('PAJAK', 0.12);

          
             $jumlahproyek = 3;
             $total_gaji;
             $gajibersih;
             

        $jumlahproyek *=BONUS;
        $total_gaji = GAJI_POKOK * PAJAK;
        $pajak_asli = $total_gaji * PAJAK;
        $gajibersih = $total_gaji - $pajak_asli;


    echo    "ini bonus anda $jumlahproyek <br/>";
    echo    "ini gaji anda setelah di tambah bonus $total_gaji <br/>";
    echo    "pajak anda $pajak_asli <br/>";   
    echo    "gaji bersih anda $gajibersih <br/>";

?>
</body>
</html>
