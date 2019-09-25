<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit profilwebconfig</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row" hidden>
              <label class="col-sm-2 col-form-label">id_config</label>
              <div class="col-sm-10">
                <input type="text" name="id_config" class="form-control" placeholder="" value="<?php echo $dataedit->id_config?>" readonly>
              </div>
            </div>
						<div class="form-group row" hidden>
              <label for="example-text-input" class="col-sm-2 col-form-label">id_profil</label>
              <div class="col-sm-10">
                <input type="text" name="id_profil" class="form-control" value="<?php echo $dataedit->id_profil?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">service tagline</label>
              <div class="col-sm-10">
                <input type="text" name="service_tagline" class="form-control" value="<?php echo $dataedit->service_tagline?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">service judul</label>
              <div class="col-sm-10">
                <input type="text" name="service_judul" class="form-control" value="<?php echo $dataedit->service_judul?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">service deskripsi</label>
              <div class="col-sm-10">
                <input type="text" name="service_deskripsi" class="form-control" value="<?php echo $dataedit->service_deskripsi?>">
              </div>
              </div>
						<div class="form-group row">
              <!-- <label for="example-text-input" class="col-sm-2 col-form-label">servicegambar</label> -->
              <div class="col-sm-10">
                <!-- <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/imageconfig'.$dataedit->servicegambar?>" name="servicegambar"> -->
                <!-- <input type="text" name="servicegambar" class="form-control" value="<?php echo $dataedit->servicegambar?>"> -->
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">whychoose tagline</label>
              <div class="col-sm-10">
                <input type="text" name="whychoose_tagline" class="form-control" value="<?php echo $dataedit->whychoose_tagline?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">whychoose judul</label>
              <div class="col-sm-10">
                <input type="text" name="whychoose_judul" class="form-control" value="<?php echo $dataedit->whychoose_judul?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">whychoose deskripsi</label>
              <div class="col-sm-10">
                <input type="text" name="whychoose_deskripsi" class="form-control" value="<?php echo $dataedit->whychoose_deskripsi?>">
              </div>
              </div>
						<div class="form-group row">
              <!-- <label for="example-text-input" class="col-sm-2 col-form-label">whygambar</label> -->
              <div class="col-sm-10">
                <!-- <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/imageconfig'.$dataedit->whygambar?>" name="whygambar"> -->

                <!-- <input type="text" name="whygambar" class="form-control" value="<?php echo $dataedit->whygambar?>"> -->
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
