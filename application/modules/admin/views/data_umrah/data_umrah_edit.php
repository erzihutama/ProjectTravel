<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit data_umrah</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_data_umrah</label>
              <div class="col-sm-10">
                <input type="text" name="id_data_umrah" class="form-control" placeholder="" value="<?php echo $dataedit->id_data_umrah?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">airport_price</label>
              <div class="col-sm-10">
                <input type="text" name="airport_price" class="form-control" value="<?php echo $dataedit->airport_price?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">logistik</label>
              <div class="col-sm-10">
                <input type="text" name="logistik" class="form-control" value="<?php echo $dataedit->logistik?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">bus</label>
              <div class="col-sm-10">
                <input type="text" name="bus" class="form-control" value="<?php echo $dataedit->bus?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">driver_tip</label>
              <div class="col-sm-10">
                <input type="text" name="driver_tip" class="form-control" value="<?php echo $dataedit->driver_tip?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">hotel_handling</label>
              <div class="col-sm-10">
                <input type="text" name="hotel_handling" class="form-control" value="<?php echo $dataedit->hotel_handling?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">billboy</label>
              <div class="col-sm-10">
                <input type="text" name="billboy" class="form-control" value="<?php echo $dataedit->billboy?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">mutawwif</label>
              <div class="col-sm-10">
                <input type="text" name="mutawwif" class="form-control" value="<?php echo $dataedit->mutawwif?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">mutawwifa</label>
              <div class="col-sm-10">
                <input type="text" name="mutawwifa" class="form-control" value="<?php echo $dataedit->mutawwifa?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">muassasa</label>
              <div class="col-sm-10">
                <input type="text" name="muassasa" class="form-control" value="<?php echo $dataedit->muassasa?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">visa</label>
              <div class="col-sm-10">
                <input type="text" name="visa" class="form-control" value="<?php echo $dataedit->visa?>">
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
