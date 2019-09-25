<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data Hotel</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Hotel</label>
                <div class="col-sm-10">
                  <input type="text" name="namahotel" class="form-control" placeholder="Isi Nama Hotel " required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Deskrips</label>
                <div class="col-sm-10">
                  <input type="text" name="deskripsi" class="form-control" placeholder="Hotel Bintang 5" required>
                </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pilih Kota</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="id_kota"required>
                      <?php foreach ($datakota as $d): ?>
                        <option value="<?php echo $d->id_kota ?>"><?php echo $d->nama_kota ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
						<!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">id_kota</label>
                <div class="col-sm-10">
                  <input type="text" name="id_kota" class="form-control">
                </div>
              </div> -->
              <hr>
              <br>
              <h3 align="center ">Harga Reguler</h3>
              <br>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Reguler Quad</label>
                <div class="col-sm-10">
                  <input type="number" name="reguler_quad" class="form-control" placeholder="isi harga" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Reguler Triple</label>
                <div class="col-sm-10">
                  <input type="number" name="requler_triple" class="form-control"  placeholder="isi harga" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Reguler Double</label>
                <div class="col-sm-10">
                  <input type="number" name="reguler_double" class="form-control"  placeholder="isi harga" required>
                </div>
              </div>
              <hr>
              <br>
                <h3 align="center ">Harga High Sesion</h3>
                  <br>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">High Quad</label>
                <div class="col-sm-10">
                  <input type="number" name="high_quad" class="form-control" placeholder="isi harga">
                </div>
              </div>

						<div class="form-group row">
                <label class="col-sm-2 col-form-label">High Triple</label>
                <div class="col-sm-10">
                  <input type="number" name="high_triple" class="form-control" placeholder="isi harga">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">High Double</label>
                <div class="col-sm-10">
                  <input type="number" name="high_double" class="form-control" placeholder="isi harga">
                </div>
              </div>
</div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
      <br>

    </section>
