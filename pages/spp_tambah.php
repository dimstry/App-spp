 <?php 
    $template = "dashboard";
    $judul = "Tambah SPP";
    $konten = "
    <div class='container-fluid'>
      <h6 class='text-dark'>Tambah SPP</h6>
      <div class='col-10'>
        <div class='card-header'>
        <form>
        <div class='form-group row'>
            <label class='col-sm-2 col-form-label col-form-label-sm'>Tahun</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='tahun'>
            </div>
          </div>
        <div class='form-group row'>
            <label class='col-sm-2 col-form-label col-form-label-sm'>Nominal</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='nominal'>
            </div>
          </div>
          <button type='submit' class='btn btn-success'>Tambah</button>
          <a href='?page=spp_data' class='btn btn-danger'>
          batal</a>
        </form>
        </div>
      </div>
    </div>
    ";
 ?>