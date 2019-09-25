<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit hotel</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row" hidden>
              <label class="col-sm-2 col-form-label">id_hotel</label>
              <div class="col-sm-10">
                <input type="text" name="id_hotel" class="form-control" placeholder="" value="<?php echo $dataedit->id_hotel?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Nama Hotel</label>
              <div class="col-sm-10">
                <input type="text" name="namahotel" class="form-control" value="<?php echo $dataedit->namahotel?>" required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $dataedit->deskripsi?>"required>
              </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Update Kota</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="id_kota" required>
                      <?php foreach ($datakota as $d): ?>
                        <option value="<?php echo $d->id_kota ?>"><?php echo $d->nama_kota ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

						<!-- <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">id_kota</label>
              <div class="col-sm-10">
                <input type="text" name="id_kota" class="form-control" value="<?php echo $dataedit->id_kota?>">
              </div>
              </div> -->
              <hr>
              <br>
              <h3 align="center ">Harga Reguler</h3>
              <br>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Reguler Quad</label>
              <div class="col-sm-10">
                <input type="number" name="reguler_quad" class="form-control" value="<?php echo $dataedit->reguler_quad?>" required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Reguler Triple</label>
              <div class="col-sm-10">
                <input type="number" name="requler_triple" class="form-control" value="<?php echo $dataedit->requler_triple?>" required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Reguler Triple</label>
              <div class="col-sm-10">
                <input type="number" name="reguler_double" class="form-control" value="<?php echo $dataedit->reguler_double?>" required>
              </div>
              </div>
              <hr>
              <br>
              <h3 align="center ">Harga high Sesion</h3>
              <br>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">High Quad</label>
              <div class="col-sm-10">
                <input type="number" name="high_quad" class="form-control" value="<?php echo $dataedit->high_quad?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">High Triple</label>
              <div class="col-sm-10">
                <input type="number" name="high_triple" class="form-control" value="<?php echo $dataedit->high_triple?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">High Double</label>
              <div class="col-sm-10">
                <input type="number" name="high_double" class="form-control" value="<?php echo $dataedit->high_double?>">
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
