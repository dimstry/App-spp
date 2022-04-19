<?php
    $template = "dashboard";
    $judul = "Siswa Edit";
    $konten = "
    <div class='container-fluid'>
      <h6 class='text-dark'>Edit siswa</h6>
      <div class='col-10'>
        <div class='card-header'>
        <form>
        <div class='form-group row'>
            <label class='col-sm-2 col-form-label col-form-label-sm'>T</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='kelas'>
            </div>
          </div>
        <div class='form-group row'>
            <label class='col-sm-2 col-form-label col-form-label-sm'>nama</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='nama'>
            </div>
          </div>
          <button type='submit' class='btn btn-success'>Update</button>
          <a href='?page=spp_data' class='btn btn-danger'>
          batal</a>
        </form>
        </div>
      </div>
    </div>
   ";
 
?>