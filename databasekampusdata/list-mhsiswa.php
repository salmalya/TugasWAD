<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>DATABASE KAMPUS</title>
</head>

<body>
    <header>
        <h3>LIST MAHASISWA</h3>
    </header>

    <nav>
        <a href="input-mhsiswa.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>Jenis Kelamin</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM datamhs";
        $query = mysqli_query($db, $sql);

        while($mhsiswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mhsiswa['NIM']."</td>";
            echo "<td>".$mhsiswa['nama']."</td>";
            echo "<td>".$mhsiswa['jurusan']."</td>";
            echo "<td>".$mhsiswa['angkatan']."</td>";
            echo "<td>".$mhsiswa['jenis_kelamin']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$mhsiswa['NIM']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mhsiswa['NIM']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>