<section class="card">
      <div class="card-header">
        <h4 class="card-title">Simulasi  Data Harga</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="POST" action="<?php echo base_url() ?>agen/hasil">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Banyak Jamaah</label>
                <div class="col-sm-10">
                  <input type="text" name="banyak_jamaah" class="form-control" required>
                </div>
              </div>
                <hr>

                <hr>
                  <h4 class="card-title">Pilih Malam / hari</h4>
                  <br>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Madinah</label>
                <div class="col-sm-10">
                  <input type="text" name="malammadinah" class="form-control" required>
                </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Mekah</label>
                  <div class="col-sm-10">
                    <input type="text" name="malammekah" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> Jeddah</label>
                    <div class="col-sm-10">
                      <input type="text" name="malamjeddah" class="form-control">
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
