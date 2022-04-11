<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
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

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>