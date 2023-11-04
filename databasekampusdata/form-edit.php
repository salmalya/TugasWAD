<?php

include("config.php");

// kalau tidak ada NIM di query string
if( !isset($_GET['NIM']) ){
    header('Location: list-mhsiswa.php');
}

//ambil NIM dari query string
$id = $_GET['NIM'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dtamhs WHERE NIM=$NIM";
$query = mysqli_query($db, $sql);
$mhsiswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="NIM" value="<?php echo $mhsiswa['NIM'] ?>" />

        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="NIM" placeholder="NIM" value="<?php echo $mhsiswa['NIM'] ?>" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $mhsiswa['nama'] ?>" />
        </p>
        <p>
            <label for="jurusan">Agama: </label>
            <?php $jurusan = $mhsiswa['agama']; ?>
            <select name="jurusan">
                <option <?php echo ($jurusan == 'Sistem Informasi') ? "selected": "" ?>>Sistem Informasi</option>
                <option <?php echo ($jurusan == 'Teknik Industri') ? "selected": "" ?>>Teknik Industri</option>
                <option <?php echo ($jurusan == 'Teknik Logistik') ? "selected": "" ?>>Teknik Logistik</option>
            </select>
        </p>
        <p>
            <label for="angkatan">Angkatan: </label>
            <input type="text" name="angkatan" placeholder="angkatan" value="<?php echo $mhsiswa['angkatan'] ?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $mhsiswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
 
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>