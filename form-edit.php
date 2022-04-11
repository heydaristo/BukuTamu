<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-tamu.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM bukutamu WHERE id=$id";
$query = mysqli_query($db, $sql);
$tamu = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit BukuTamu</title>
</head>
<body>
    <h1 style="text-align: center;">
   FORM EDIT 
    </h1>
    <a href="list-tamu.php">
        <button>Lihat Tamu</button>
    </a>
    <form action="proses-edit.php" method="POST" style="text-align: center;">
    <input type="hidden" name="id" value="<?php echo $tamu['id'] ?>"/>

        <input type="text" placeholder="Nama" name="nama" value="<?php echo $tamu['nama'] ?>"> <br>

        <input type="text" placeholder="Alamat" name="alamat" value="<?php echo $tamu['alamat'] ?>"> <br>

        <input type="text" placeholder="Asal Instansi" name="asal_instansi" value="<?php echo $tamu['asal_instansi'] ?>"> <br>

        <input type="text" name="pesan_dan_kesan" placeholder="Pesan Dan Kesan" value="<?php echo $tamu['pesan_dan_kesan'] ?>"> <br>

        <input type="submit" value="simpan" name="simpan">

        <input type="submit" value="ulang" name="ulang">
    </form>
</body>
</html>