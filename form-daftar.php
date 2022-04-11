<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuTamu</title>
</head>
<body>
    <h1 style="text-align: center;">
    Pendaftaran Buku Tamu <br>SMKN 1 SAYUNG
    </h1>
    <a href="list-tamu.php">
        <button>Lihat Tamu</button>
    </a>
    <form action="proses-pendaftaran.php" method="POST" style="text-align: center;">
        <input type="text" placeholder="Nama" name="nama"> <br>
        <input type="text" placeholder="Alamat" name="alamat"> <br>
        <input type="text" placeholder="Asal Instansi" name="asal_instansi"> <br>
        <input type="text" name="pesan_dan_kesan" placeholder="Pesan Dan Kesan"> <br>
        <input type="submit" value="Kirim" name="kirim">
        <input type="submit" value="Ulang" name="ulang">
    </form>
</body>
</html>