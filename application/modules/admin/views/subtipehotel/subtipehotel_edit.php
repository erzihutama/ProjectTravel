<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit subtipehotel</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row" hidden>
              <label class="col-sm-2 col-form-label">id_subtipe</label>
              <div class="col-sm-10">
                <input type="text" name="id_subtipe" class="form-control" placeholder="" value="<?php echo $dataedit->id_subtipe?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Nama SubTipe</label>
              <div class="col-sm-10">
                <input type="text" name="nama_subtipe" class="form-control" value="<?php echo $dataedit->nama_subtipe?>" required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Harga Tipe</label>
              <div class="col-sm-10">
                <input type="text" name="hargatipe" class="form-control" value="<?php echo $dataedit->hargatipe?>" required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Tipe Hotel</label>
              <div class="col-sm-10">
                <input type="text" name="id_tipehotel" class="form-control" value="<?php echo $dataedit->id_tipehotel?>" required>
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
