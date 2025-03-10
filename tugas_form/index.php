<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        input, textarea, select {
            @apply border border-gray-300 rounded-md shadow-sm px-2 py-1 m-2;
        }
    </style>
</head>
<body class="container mx-auto lg:max-w-5xl">
    <!-- nisn 
     nama lengkap
     tempat lahir
     lahir
     gender
     agama
     alamat
     asal sekolah
     pilihan jurusan 1 
     pilihan jurusan 2
     extra yang diminati
     submit
      -->
    <form action="proses.php" method="post">
        <label for="nisn">NISN</label>
        <input type="text" name="nisn" id="nisn">
        <br>
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir">
        <br>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
        <br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="gender" value="L">Laki-laki
        <input type="radio" name="gender" id="gender" value="P">Perempuan
        <br>
        <label for="agama">Agama</label>
        <select name="agama" id="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
        <br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat"></textarea>
        <br>
        <label for="asal_sekolah">Asal Sekolah</label>
        <input type="text" name="asal_sekolah" id="asal_sekolah">
        <br>
        <label for="jurusan1">Pilihan Jurusan 1</label>
        <select name="jurusan1" id="jurusan1">
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="BCF">Board Casting & Perfilman</option>
            <option value="PM">Pemasaran</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="AKL">Akutansi Keuangan Lembaga</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
            <option value="PH">Perhotelan</option>
            <option value="KL">Kuliner</option>    
        </select>
        <br>
        <label for="jurusan2">Pilihan Jurusan 2</label>
        <select name="jurusan2" id="jurusan2">
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="BCF">Board Casting & Perfilman</option>
            <option value="PM">Pemasaran</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="AKL">Akutansi Keuangan Lembaga</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
            <option value="PH">Perhotelan</option>
            <option value="KL">Kuliner</option>     
        </select>
        <br>
        <label for="jurusan3">Pilihan Jurusan 3</label>
        <select name="jurusan3" id="jurusan3">
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="BCF">Board Casting & Perfilman</option>
            <option value="PM">Pemasaran</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="AKL">Akutansi Keuangan Lembaga</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
            <option value="PH">Perhotelan</option>
            <option value="KL">Kuliner</option>    
        </select>
        <br>
        <label for="extra">
            pilih extra yang diminati
        </label>
      <input type="checkbox" name="extra[]" id="extra1" value="Pecinta Alam">Pecinta Alam
        <input type="checkbox" name="extra[]" value="Dewan Ambalan">Dewan Ambalan
        <input type="checkbox" name="extra[]" value="OSIS">OSIS 
        <input type="checkbox" name="extra[]" value="Gerakan Disiplin Sekolah">Gerakan Disiplin Sekolah
        <input type="checkbox" name="extra[]" value="Laskar Hijau">Laskar Hijau 
        <input type="checkbox" name="extra[]" value=PMR>PMR
        <input type="checkbox" name="extra[]" value="Remaja Masjid">Remaja Masjid
        <input type="checkbox" name="extra[]" value="Teater Kusuma">Teater Kusuma
        <input type="checkbox" name="extra[]" value="Voli">Voli
        <input type="checkbox" name="extra[]" value="Basket">Basket
        <input type="checkbox" name="extra[]" value="Futsal">Futsal
        <input type="checkbox" name="extra[]" value="Paskibra">Paskibra  
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>
<!-- ini dibantu masnya -->