<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuTamu</title>
</head>
<body>
    <h1>
    Gelar Karya SMKN 1 Sayung
    </h1>
    <p>Silahkan Daftar dan Melihat Daftar 
    <br>Dibawah Ini
    </p>
    <a href="form-daftar.php">
        <button>
            Daftar
        </button>
    </a>
    <a href="list-tamu.php">
        <button>
            Lihat Daftar
        </button>
    </a>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</body>
</html>