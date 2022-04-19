<?php 
    $a01=$_POST['username'];
    $a02=$_POST['password'];
    $a03=$_POST['pilih'];
    $tombol=$_POST['tombol'];

    switch($a03)
    {
        case '1':  //Siswa 
            if($a01=="siswa" and $a02=="1234")
            {
                $_SESSION['JenisLog']="siswa";
                $_SESSION['Id']=$a01;
                header("location:?page=home_siswa");
            }
            else 
            {
                $keterangan="<script>alert('Password atau kata sandi salah!!'); </script>
                          ";
            }
        break;
        case '2':  //Petugas  
            if($a01=="petugas" and $a02=="4321")
            {
                $_SESSION['JenisLog']="petugas";
                $_SESSION['Id']=$a01;
                header("location:?page=home_petugas");
            }
            else 
            {
                $keterangan="<div class='alert alert-danger mt-3'>Maaf username / password salah</div>";
            }
        break;
        case '3':  //Admin  
            if($a01=="admin" and $a02=="4444")
            {
                $_SESSION['JenisLog']="administrator";
                $_SESSION['Id']=$a01;
                header("location:?page=home");
            }
            else 
            {
                $keterangan="<div class='alert alert-danger mt-3'>Maaf username / password salah</div>";
            }
        break;
    }

?>