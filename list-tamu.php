<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color: cream;">
    <div class="container border-bottom border-2">
        <h3 class="text-center">Tamu yang sudah mendaftar</h3>
    </div>
    <div class="container-fluid pt-5">
        <a class="btn btn-primary" href="form-daftar.php" role="button">[+] Tambah Baru</a>
    </div>
    <br>
    <div class="container-fluid pb-3">
    <!-- <div class="container"> -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Asal Instansi</th>
                <th>Pesan Dan Kesan</th>
                <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM bukutamu";
        $query = mysqli_query($db, $sql);
        $i=1;
        while($tamu = mysqli_fetch_array($query)){
            echo "<tr>";
            
            echo "<td>".$i."</td>";
            echo "<td>".$tamu['nama']."</td>";
            echo "<td>".$tamu['alamat']."</td>";
            echo "<td>".$tamu['asal_instansi']."</td>";
            echo "<td>".$tamu['pesan_dan_kesan']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$tamu['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$tamu['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $i++;
        }
        ?>

</tbody>
</table>
</div>
</div>
</div>

    <p class="border text-end pe-2 fs-4"><b>Total: <?php echo mysqli_num_rows($query) ?></b></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
    </html>