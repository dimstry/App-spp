<?php

    $template = "depan";
    $judul = "login";
    $konten = "
    <body class='bg-gradient-primary background'>

    <div class='container'>

        <!-- Outer Row -->
        <div class='row justify-content-center'>

            <div class='col-xl-9 col-lg-12 col-md-8'>

                <div class='card my-5 cardd'>
                    <div class='card-body '>
                        <!-- Nested Row within Card Body -->
                        <div class='row' >
                            <div class='col-lg-6 d-none d-lg-block'><img src ='assets/img/lg.png' style = 'height: 260px; width: 260px; margin-left: 2em; margin-top: 2em; margin-bottom: 2em;'></div>
                            <div class='col-lg-6'>
                                <div class='p-5'>
                                    <div class='text-center'>
                                        <h1 class='h4 text-dark mb-4'>Selamat Datang</h1>
                                    </div>
                                    <form class='user' method='post'>
                                        <div class='form-group'>
                                            <input type='text' name='username' class='form-control form-control-user'placeholder='Enter ussername'>
                                        </div>
                                        <div class='form-group'>
                                            <input type='password' name='password' id='pw' class='form-control form-control-user'placeholder='Password'>
                                        </div>
<input type='checkbox' onclick='myFunction()'>Show Password                                 
                                        <div class='form-group'>
                                            <select class='custom-select rounded-pill' name='pilih'  id='pilih'>
                                                <option selected>--login sebagai--</option>
                                                <option value='1'>Siswa</option>
                                                <option value='2'>Petugas</option>
                                                <option value='3'>Administrator</option>
                                            </select>
                                        </div>
                                        <input type='submit' name='tombol' value='Login'  class='btn btn-primary btn-user btn-block'>
                              $keterangan
                                        </input>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    ";
?>

