<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Agen</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_agen" class="form-control" required placeholder="Ewagate">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" required placeholder="username">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control"required placeholder="password">
                </div>
              </div>
						<div class="form-group row" required>
                <label class="col-sm-2 col-form-label">jenis_kelamin</label>
                <div class="col-sm-10">
                  <select name="jenis_kelamin" class="form-control">
                      <option value="L">Laki - laki</option>
                      <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" required placeholder="contoh@email.com">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                  <input type="number" name="no_telp" class="form-control" required placeholder="02132938">
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
