<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit paket</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row" hidden>
              <label class="col-sm-2 col-form-label">id_paket</label>
              <div class="col-sm-10">
                <input type="text" name="id_paket" class="form-control" placeholder="" value="<?php echo $dataedit->id_paket?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Nama Paket</label>
              <div class="col-sm-10">
                <input type="text" name="nama_paket" class="form-control" value="<?php echo $dataedit->nama_paket?>"required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">keterangan</label>
              <div class="col-sm-10">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $dataedit->keterangan?>" required>
              </div>
              </div>

        </div>
        <input type="hidden" id="deleteFiles" name="deleteFiles">
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
