<?php
$template = "depan";
$judul = "Dasboard";
$konten = "
<body id='page-top'>

    <!-- Page Wrapper -->
    <div id='wrapper'>

        <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-danger sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='page_admin.php'>
                <div class='sidebar-brand-icon'>
                <i class='fas fa-user'></i>
                </div>
                <div class='sidebar-brand-text mx-3'>Admin</div>
            </a>

            <!-- Divider -->
            <hr class='sidebar-divider'>
            <!-- Heading -->
            <div class='sidebar-heading'>
                Data-Data
            </div>
            
           <li class='nav-item'>
                <a class='nav-link' href='siswa.php'>
                    <i class='fas fa-user-cog'></i>
                    <span>Siswa</span></a>
            </li>
            <!-- Divider -->
           <li class='nav-item'>
                <a class='nav-link' href='siswa.php'>
                    <i class='fas fa-user-cog'></i>
                    <span>Petugas</span></a>
            </li>


           <li class='nav-item'>
                <a class='nav-link' href='siswa.php'>
                     <i class='fas fa-user-cog'></i>
                    <span>Kelas</span></a>
            </li>
     
           <li class='nav-item'>
                <a class='nav-link' href='siswa.php'>
                    <i class='fas fa-user-cog'></i>
                    <span>SPP</span></a>
            </li>
            <!-- Divider -->
            <hr class='sidebar-divider my-0'>
            
            <!-- Nav Item - pembayaran -->
            <li class='nav-item'>
                <a class='nav-link' href='bayar.php'>
                 <i class='fas fa-money-check-alt'></i>
                    <span>Entri pembayaran</span></a>
            </li>

            <!-- Divider -->
            <hr class='sidebar-divider my-0'>

            <!-- History -->
            <li class='nav-item'>
                <a class='nav-link' href='historyadmin.php'>
                    <i class='far fa-clock'></i>
                    <span>History pembayaran</span></a>
            </li>
            
            
           <!-- Divider -->
            <hr class='sidebar-divider my-0'>

              <li class='nav-item'>
                <a class='nav-link' href='historyadmin.php'>
                   <i class='fas fa-exclamation'></i>
                    <span>Generat laporan</span></a>
            </li>
            <hr class='sidebar-divider my-0'>
            <hr>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class='text-center d-none d-md-inline'>
                <button class='rounded-circle border-0' id='sidebarToggle'></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id='content-wrapper' class='d-flex flex-column'>

            <!-- Main Content -->
            <div id='content'>

             <!-- Topbar -->
                <nav class='navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow'>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id='sidebarToggleTop' class='btn btn-link d-md-none rounded-circle mr-3'>
                        <i class='fa fa-bars'></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class='navbar-nav ml-auto'>
                        <!-- Nav Item - Alerts -->
                        <li class='nav-item dropdown no-arrow mx-1'>
                        </li>

                        <div class='topbar-divider d-none d-sm-block'></div>

                        <!-- Nav Item - User Information -->
                        <li class='nav-item dropdown no-arrow'>
                            <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='mr-2 d-none d-lg-inline text-white-900 small'>Admin</span>
                                <img class='img-profile rounded-circle' src='assets/img/pp.gif'>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in'
                                aria-labelledby='userDropdown'>
                                <a class='dropdown-item' href='#' data-toggle='modal' data-target='#logoutModal'>
                                    <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class='container-fluid'>

                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Selamat datang Admin</h1>
                    <div class='card shadow mb-4 bg-warning'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-primary'>Data Siswa</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered text-white' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>kelas</th>
                                            <th>jurusan</th>
                                            <th>pembayaran</th>
                                            <th>History</th>
                                            <th>hapus</th>
                                            <th>Edit</th>
                                            <th>tambah</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-success btn-circle'>
                                                <i class='fas fa-check'></i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-info btn-circle'>
                                                <i class='fas fa-info-circle'></i>
                                            </td>
                                        </tr>
                                             <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-success btn-circle'>
                                                <i class='fas fa-check'></i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-info btn-circle'>
                                                <i class='fas fa-info-circle'></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-success btn-circle'>
                                                <i class='fas fa-check'></i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-info btn-circle'>
                                                <i class='fas fa-info-circle'></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-success btn-circle'>
                                                <i class='fas fa-check'></i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-info btn-circle'>
                                                <i class='fas fa-info-circle'></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-success btn-circle'>
                                                <i class='fas fa-check'></i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-info btn-circle'>
                                                <i class='fas fa-info-circle'></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-success btn-circle'>
                                                <i class='fas fa-check'></i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='#' class='btn btn-info btn-circle'>
                                                <i class='fas fa-info-circle'></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class='sticky-footer bg-white'>
                <div class='container my-auto'>
                    <div class='copyright text-center my-auto'>
                        <span>Copyright &copy; Regi,Cika,Dimas 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class='scroll-to-top rounded' href='#page-top'>
        <i class='fas fa-angle-up'></i>
    </a>

    <!-- Logout Modal-->
    <div class='modal fade' id='logoutModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
        aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Yakin keluar</h5>
                    <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                    </button>
                </div>
                <div class='modal-body'>Kllik 'Keluar' jika anda yakin ingin keluar</div>
                <div class='modal-footer'>
                    <button class='btn btn-secondary' type='button' data-dismiss='modal'>Batal</button>
                    <a class='btn btn-primary' href='pages/logout.php' name='logout'>Keluar</a>
                </div>
            </div>
        </div>
    </div>

";
	
?>