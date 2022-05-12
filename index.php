<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuTamu</title>
    <style>
        html {
            background: url("logo/background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }
        p {
            color: white;
        }
        .text {
            font-size: 20px;
            outline: none;
            text-transform: uppercase;
            background: linear-gradient(135deg,#16a085 0%,#27ae60 25%,#2980b9 50%,#8e44ad 75%, #f1c40f 100%);
            background-size: 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animate 13s linear infinite;
            border-bottom: 3px solid black;
        }
        @keyframes animate {
            to{
                background-position: 400%;
            }
        }
        .container {
            border: 1px solid black;
            padding: 15px;
            margin-top: 10px;
            font-size: 20px;
            
        }
        .btn {
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: blue;
        border: 2px solid darkblue;
        border-radius: 0.6em;
        color: #e74c3c;
        cursor: pointer;
        align-self: center;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1;
        margin: 20px;
        padding: 1.2em 2.8em;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        }
        .btn:hover, .btn:focus {
          color: #fff;
          outline: 0;
        }
        .fourth {
          border-color: #000;
          color: #fff;
          background-image: linear-gradient(45deg, darkblue 50%, transparent 50%);
          background-position: 100%;
          background-size: 400%;
          transition: background 300ms ease-in-out;
        }
.fourth:hover {
  background-position: 0;
}
    </style>
</head>
<body>
    <h1>
            Gelar Karya SMKN 1 Sayung
    </h1>
    </div>
    <div class="container">
    <img src="logo/logo1.png" alt="smkn1sayung">
    <p>Silahkan Daftar dan Melihat Daftar 
    <br>Dibawah Ini</p>
    <a href="form-daftar.php">
    <button class="btn fourth">Daftar</button></a>
    <a href="list-tamu.php">
    <button class="btn fourth">Lihat Daftar</button></a>
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
</body>
</html>