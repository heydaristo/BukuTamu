<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ai = $_POST['asal_instansi'];
    $pdk = $_POST['pesan_dan_kesan'];

    // buat query update
    $sql = "UPDATE bukutamu SET nama='$nama', alamat = '$alamat', asal_instansi = '$ai', pesan_dan_kesan = '$pdk' WHERE id = $id";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: list-tamu.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>