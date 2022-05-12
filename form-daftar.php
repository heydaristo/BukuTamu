<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuTamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .jumbotron {
            padding-top: 5rem;
        }
        .fs-2 {
            padding-top: 1rem;
        }
        .form {
            padding-top: 1rem;
        }
    </style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top" data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="index.php">GELAR KARYA SMKN 1 SAYUNG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <div class="collapse navbar-collapse" id="navbarNav">
          </button>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="list-tamu.php">Lihat Tamu</a>
              </li>
          </div>
          </nav>
<!-- akhir navbar -->
<!-- Jumbotron -->
<section class="jumbotron text-center">
<div data-aos="fade-down"
     data-aos-easing="linear">
     <img src="logo/logo1.png" alt="logosmk" class="rounded-circle img-thumbnail">
    </div>
    <h1 class="fs-2">BukuTamu <br> SMKN 1 SAYUNG</h1>
  </section>
<!-- mbotron -->
<!-- Form -->
    <section class="form" id="form">
        <div class="container">
          <div class="row text-center md-3">
            <div class="col">
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form action="proses-pendaftaran.php" method="POST">
                <div class="mb-3">
                  <label for="Name" class="form-label">Nama Lengkap</label>
                  <input name="nama" type="text" class="form-control" id="name" aria-describedby="name">
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="alamat">
                </div> 
                <div class="mb-3">
                  <label for="asal_instansi" class="form-label">Asal Instansi</label>
                  <input name="asal_instansi" type="text" class="form-control" id="asal_instansi" aria-describedby="asal_instansi">
                </div> 
                <div class="mb-3">
                  <label for="pesan_dan_kesan" class="form-label">Pesan Dan Kesan</label>
                  <textarea name="pesan_dan_kesan" class="form-control" id="pesan_dan_kesan" rows= "3"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" name="kirim" value="Kirim"></input>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer -->
<footer class="bg-primary text-white text-center p-2">
    <p>Dibuat <a href="https://www.instagram.com/HeydarCraft" class="text-white"><b>Heydaristo</b></a></p>
  </footer>
  <!-- Akhir Footer -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>