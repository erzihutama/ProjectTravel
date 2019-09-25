<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data Hari </h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">hari</label>
                <div class="col-sm-10">
                  <input type="text" name="hari" class="form-control" placeholder="Hari Pertama" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                  <input type="text" name="keterangan" class="form-control"  placeholder="Menuju mekah " required>
                </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Paket</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="id_paket" required>
                      <?php foreach ($data_paket as $d): ?>
                        <option value="<?php echo $d->id_paket ?>"><?php echo $d->nama_paket ?></option>
                      <?php endforeach; ?>
                    </select>
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
