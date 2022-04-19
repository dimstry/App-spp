<?php
    error_reporting(0);

    $query_hapus="DELETE FROM siswa WHERE nisn ='{$_GET['i']}'";
    $h=mysqli_query($koneksi,$query_hapus);

    $query_select="SELECT * FROM siswa";
    $tampil=mysqli_query($koneksi,$query_select);

    foreach ($tampil as $key )
    {
        $nomor++;
        $t.="
        <tbody>
            <tr>
                <td>$nomor</td>
                <td>{$key['nisn']}</td>
                <td>{$key['nis']}</td>
                <td>{$key['nama']}</td>
                <td>{$key['id_kelas']}</td>
                <td>{$key['alamat']}</td>
                <td>{$key['no_telp']}</td>
                <td>{$key['id_spp']}</td>
                <td>
                <a href='?page=hapus.php?i={$key['nisn']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a> </td>
                <td>
                <a href='?page=siswa_edit' class='btn btn-success btn-circle'><i class='fas fa-edit'></i><a></td>
        
            </tr>
        </tbody>
        ";
    }
    $template = "dashboard";
    $judul = "Data Siswa";
    $konten = "
   <!-- Begin Page Content -->
                <div class='container-fluid'>

                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Data Siswa</h1>
                    <!-- awal card|table -->
                    <div class='card shadow mb-4 bg-white'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-primary'>Data Siswa</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered text-dark' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Id kelas</th>
                                            <th>alamat</th>
                                            <th>No telp</th>
                                            <th>Id SPP</th>
                                            <th>hapus</th>
                                            <th>edit</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    
                                     $t

                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
              <!-- akhir card|table -->
       <div class='container-fluid'>
         <div class='card-body'>
           <a class='btn btn-primary' href='?page=siswa_tambah'>Tambah Siswa</a>
         </div>
       </div>


";
	
?>