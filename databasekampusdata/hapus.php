<?php

include("config.php");

if( isset($_GET['NIM']) ){

    // ambil NIM dari query string
    $id = $_GET['NIM'];

    // buat query hapus
    $sql = "DELETE FROM datamhs WHERE NIM=$NIM";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-mhsiswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>