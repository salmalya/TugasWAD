<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];
    $jk = $_POST['jenis_kelamin'];

    // buat query
    $sql = "INSERT INTO dataMhs (NIM, nama, jurusan, angkatan, jenis_kelamin) VALUE ('$NIM', '$nama', '$jurusan', '$angkatan', '$jk')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>