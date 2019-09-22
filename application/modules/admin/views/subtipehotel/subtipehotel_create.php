<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Subtipe</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_subtipe" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga Tipe</label>
                <div class="col-sm-10">
                  <input type="text" name="hargatipe" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tipe Hotel</label>
                <div class="col-sm-10">
                  <input type="text" name="id_tipehotel" class="form-control" required>
                </div>
              </div>
</div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
