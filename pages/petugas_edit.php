<?php
    $template = "dashboard";
    $judul = "Data Siswa";
    $konten = "
    <div class='container-fluid'>
    <h6 class='text-dark'>Tambah Petugas</h6>
      <div class='row'>
      <div class='card-header'>
        <form>
          <div class='form-group row'>
            <label for='ussername' class='col-sm-2 col-form-label col-form-label-sm'>ussername</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='ussername'>
            </div>
          </div>
          <div class='form-group row'>
            <label for='nama' class='col-sm-2 col-form-label col-form-label-sm'>Nama</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='nama'>
            </div>
          </div>          
          <div class='form-group row'>
            <label for='kelas' class='col-sm-2 col-form-label col-form-label-sm'>Kelas</label>
            <div class='col-sm-10'>
            <select class='custom-select' id='kelas'>
              <option selected>-- Pilih Level --</option>
              <option value='1'>Administrator</option>
              <option value='2'>Petugas</option>
            </select>
            </div>
           </div>
          <button type='submit' class='btn btn-success'>Update</button>
          <a href='?page=petugas_data' class='btn btn-danger ml-2'>
          batal</a>
        </form>
      </div>
      </div>
    </div>
    
    ";
?>