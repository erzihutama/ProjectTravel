<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data Alamat</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">

                <div class="col-sm-10">
                  <input type="hidden" name="id_profil" value="<?php echo $id_profil->id_profil ?>"class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                <div class="col-sm-10">
                  <input type="text" name="alamat_perusahaan" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Telepon Perusahaan</label>
                <div class="col-sm-10">
                  <input type="number" name="telepon_perusahaan" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Email Perusahaan</label>
                <div class="col-sm-10">
                  <input type="email" name="email_perusahaan" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">maps</label>
                <div class="col-sm-10">
                  <input type="text" name="maps" class="form-control" required>
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
