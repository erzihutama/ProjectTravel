<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data Haji</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Paket</label>
                <div class="col-sm-10">

                  <select class="form-control" name="datapaket">
                    <?php foreach ($datapaket as $m): ?>
                      <option value="<?php echo $m->id_paket ?>"><?php echo $m->nama_paket ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <!-- <div class="col-sm-10">
                  <input type="text" name="id_paket" class="form-control">
                </div> -->
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Hotel</label>
                  <div class="col-sm-5">

                    <select class="form-control" name="hotelmekah">
                      <?php foreach ($hotelmekah as $m): ?>
                        <option value="<?php echo $m->id_hotel ?>"><?php echo $m->namahotel ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <!-- <div class="col-sm-10">
                    <input type="text" name="id_hotel" class="form-control"required>
                  </div> -->
                </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                  <input type="number" name="harga" class="form-control" placeholder="Harga dalam satuan dolar" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">persyaratan</label>
                <div class="col-sm-10">
                  <input type="text" name="persyaratan" class="form-control"required placeholder="Syarat-syarat jamaah">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">jadwal</label>
                <div class="col-sm-10">
                  <input type="date" name="jadwal" class="form-control"required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">fasilitas</label>
                <div class="col-sm-10">
                  <input type="text" name="fasilitas" class="form-control"required placeholder="fasilitas">
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
