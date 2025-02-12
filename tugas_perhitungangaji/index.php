<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penghitungan Gaji Bersih</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="output.php" method="POST">
        <legend><h2>Form Penghitungan Gaji Bersih <span>CV.Tekno Nusa</span></h2></legend>
        <fieldset>
            <label>Nama Karyawan:</label>
            <input type="text" name="nama" required>

            <label>Divisi:</label>
            <input type="text" name="divisi" required>

            <label>Total Gaji Perbulan (Rp):</label>
            <input type="number" name="gaji_perbulan" required>

            <label>Apakah Memiliki NPWP?</label>
            <div class="radio-group">
                <label><input type="radio" name="npwp" value="ya" required> Ya</label>
                <label><input type="radio" name="npwp" value="tidak" required> Tidak</label>
            </div>

            <input type="submit" name="hitung" value="Hitung Gaji">
        </fieldset>
    </form>

</body>
</html>