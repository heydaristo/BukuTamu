<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuTamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .jumbotron {
            padding-top: 5rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top" data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="index.php">GELAR KARYA SMKN 1 SAYUNG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="collapse navbar-collapse" id="navbarNav">
          </button>
          </nav>
<!-- Akhir Navbar -->
<!-- Jumbotron -->
<section class="jumbotron text-center">
<div data-aos="fade-down"
     data-aos-easing="linear">
     <img src="logo/logo1.png" alt="logosmk" class="rounded-circle img-thumbnail">
    </div>
    <h1 class="fs-2">BukuTamu <br> SMKN 1 SAYUNG</h1>
  </section>
  <div class="d-grid gap-2 col-6 mx-auto pt-4">
  <a href="form-daftar.php" class="btn btn-primary fs-5" role="button">Pendaftaran</a>
  <a href="list-tamu.php" class="btn btn-primary fs-5" role="button">Daftar Tamu</a>
</div>
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
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#0099ff" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,208C320,192,400,128,480,90.7C560,53,640,43,720,48C800,53,880,75,960,101.3C1040,128,1120,160,1200,154.7C1280,149,1360,107,1400,85.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
</svg>
</body>
</html>