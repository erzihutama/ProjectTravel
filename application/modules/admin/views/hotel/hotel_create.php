<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">namahotel</label>
                <div class="col-sm-10">
                  <input type="text" name="namahotel" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                  <input type="text" name="deskripsi" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pilih Kota</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pilihkota">
                      <?php foreach ($datakota as $d): ?>
                        <option value="<?php echo $d->id_kota ?>"><?php echo $d->nama_kota ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
						<div class="form-group row" hidden>
                <label class="col-sm-2 col-form-label">maps</label>
                <div class="col-sm-10">
                  <input type="text" name="maps" class="form-control" value="maps" >
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
