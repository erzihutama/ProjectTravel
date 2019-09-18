<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit tipehotel</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_tipehotel</label>
              <div class="col-sm-10">
                <input type="text" name="id_tipehotel" class="form-control" placeholder="" value="<?php echo $dataedit->id_tipehotel?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">namatipe</label>
              <div class="col-sm-10">
                <input type="text" name="namatipe" class="form-control" value="<?php echo $dataedit->namatipe?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">id_hotel</label>
              <div class="col-sm-10">
                <!-- <select class="form-control" name="id_hotel" >
                  <option  value="<?php echo $dataedit->id_hotel?>"><?php echo $dataedit->namahotel?></option>
                  <?php foreach ($datahotel as $d ): ?>
                    <option  value="<?php echo $dataedit->id_hotel?>"><?php echo $d->namahotel ?></option>
                  <?php endforeach; ?>
                </select> -->
                <input type="text" name="id_hotel" class="form-control" value="<?php echo $dataedit->id_hotel?>">
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
