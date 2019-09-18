<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit profilweb</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_profil</label>
              <div class="col-sm-10">
                <input type="text" name="id_profil" class="form-control" placeholder="" value="<?php echo $dataedit->id_profil?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">judul_perusahaan</label>
              <div class="col-sm-10">
                <input type="text" name="judul_perusahaan" class="form-control" value="<?php echo $dataedit->judul_perusahaan?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">deskripsi_perusahaan</label>
              <div class="col-sm-10">
                <input type="text" name="deskripsi_perusahaan" class="form-control" value="<?php echo $dataedit->deskripsi_perusahaan?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">taglineweb1</label>
              <div class="col-sm-10">
                <input type="text" name="taglineweb1" class="form-control" value="<?php echo $dataedit->taglineweb1?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">taglineweb2</label>
              <div class="col-sm-10">
                <input type="text" name="taglineweb2" class="form-control" value="<?php echo $dataedit->taglineweb2?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">taglineweb3</label>
              <div class="col-sm-10">
                <input type="text" name="taglineweb3" class="form-control" value="<?php echo $dataedit->taglineweb3?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">taglineimage1</label>
              <div class="col-sm-10">
                    <input type="file" name="taglineimage1" class="form-control" value="<?php echo $dataedit->taglineimage1?>" required>
                	<!-- <input type="file" id="input-file-now" name="gambar" class="dropify"> -->
                <!-- <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/images'.$dataedit->photoUrl?>" name="file"> -->
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">taglineimage2</label>
              <div class="col-sm-10">
                <input type="file" name="taglineimage2" class="form-control" value="<?php echo $dataedit->taglineimage2?>" required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">taglineimage3</label>
              <div class="col-sm-10">
                <input type="file" name="taglineimage3" class="form-control" value="<?php echo $dataedit->taglineimage3?>"required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">visi</label>
              <div class="col-sm-10">
                <input type="text" name="visi" class="form-control" value="<?php echo $dataedit->visi?>"required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">misi</label>
              <div class="col-sm-10">
                <input type="text" name="misi" class="form-control" value="<?php echo $dataedit->misi?>"required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">website</label>
              <div class="col-sm-10">
                <input type="text" name="website" class="form-control" value="<?php echo $dataedit->website?>"required>
              </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">id_user</label>
                <div class="col-sm-10">
                  <input type="text" name="id_user" class="form-control" value="<?php echo $dataedit->id_user?>"required>
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
