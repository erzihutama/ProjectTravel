<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                <div class="col-sm-10">
                  <input type="text" name="judul_perusahaan" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Deskripsi Peruasahaan</label>
                <div class="col-sm-10">
                  <input type="text" name="deskripsi_perusahaan" class="form-control" required  >
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tagline 1</label>
                <div class="col-sm-10">
                  <input type="text" name="taglineweb1" class="form-control"required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tagline 2</label>
                <div class="col-sm-10">
                  <input type="text" name="taglineweb2" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tagline 3</label>
                <div class="col-sm-10">
                  <input type="text" name="taglineweb3" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tagline Image 1</label>
                <div class="col-sm-10">
                  <input type="text" name="taglineimage1" class="form-control"required >
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tagline image 2</label>
                <div class="col-sm-10">
                  <input type="text" name="taglineimage2" class="form-control"required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tagline image 3</label>
                <div class="col-sm-10">
                  <input type="text" name="taglineimage3" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">visi</label>
                <div class="col-sm-10">
                  <input type="text" name="visi" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">misi</label>
                <div class="col-sm-10">
                  <input type="text" name="misi" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">website</label>
                <div class="col-sm-10">
                  <input type="text" name="website" class="form-control" required>
                </div>
              </div>
              <div class="form-group row" hidden>
                  <label class="col-sm-2 col-form-label">id_user</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_user" value="<?php echo $id_user->id_user ?> class="form-control">
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
