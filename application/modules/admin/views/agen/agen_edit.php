<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit agen</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_agen</label>
              <div class="col-sm-10">
                <input type="text" name="id_agen" class="form-control" placeholder="" value="<?php echo $dataedit->id_agen?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">nama_agen</label>
              <div class="col-sm-10">
                <input type="text" name="nama_agen" class="form-control" value="<?php echo $dataedit->nama_agen?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">username</label>
              <div class="col-sm-10">
                <input type="text" name="username" class="form-control" value="<?php echo $dataedit->username?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
              <div class="col-sm-10">
                <input type="text" name="password" class="form-control" value="<?php echo $dataedit->password?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">jenis_kelamin</label>
              <div class="col-sm-10">
                <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $dataedit->jenis_kelamin?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">no_telp</label>
              <div class="col-sm-10">
                <input type="text" name="no_telp" class="form-control" value="<?php echo $dataedit->no_telp?>">
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
