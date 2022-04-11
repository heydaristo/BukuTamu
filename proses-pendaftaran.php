<?php

include("config.php");
if(isset($_POST['kirim'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ai = $_POST['asal_instansi'];
    $pdk = $_POST['pesan_dan_kesan'];

    // buat query
    $sql = "INSERT INTO bukutamu (nama, alamat, asal_instansi, pesan_dan_kesan) VALUE ('$nama', '$alamat', '$ai', '$pdk')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>