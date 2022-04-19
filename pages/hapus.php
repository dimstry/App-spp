<?php
    error_reporting(0);

    $query_hapus="DELETE FROM siswa WHERE nisn ='{$_GET['i']}'";
    $h=mysqli_query($koneksi,$query_hapus);
?>