<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Paket</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_paket" class="form-control" placeholder="paket 9 hari" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">keterangan</label>
                <div class="col-sm-10">
                  <input type="text" name="keterangan" class="form-control" placeholder="paket 4 hari 3 malam" required>
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
