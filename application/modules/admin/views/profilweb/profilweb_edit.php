<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Profilweb</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
                    <label>id_profil</label>
                    <input type="text" name="id_profil" class="form-control" placeholder="" value="<?php echo $dataedit->id_profil?>" readonly>
            </div>
	  <div class="form-group">
            <label>id_config</label>
            <input type="text" name="id_config" class="form-control" value="<?php echo $dataedit->id_config?>">
    </div>
	  <div class="form-group">
            <label>id_alamat</label>
            <input type="text" name="id_alamat" class="form-control" value="<?php echo $dataedit->id_alamat?>">
    </div>
	  <div class="form-group">
            <label>judul_perusahaan</label>
            <input type="text" name="judul_perusahaan" class="form-control" value="<?php echo $dataedit->judul_perusahaan?>">
    </div>
	  <div class="form-group">
            <label>deskripsi_perusahaan</label>
            <input type="text" name="deskripsi_perusahaan" class="form-control" value="<?php echo $dataedit->deskripsi_perusahaan?>">
    </div>
	  <div class="form-group">
            <label>taglineweb1</label>
            <input type="text" name="taglineweb1" class="form-control" value="<?php echo $dataedit->taglineweb1?>">
    </div>
	  <div class="form-group">
            <label>taglineweb2</label>
            <input type="text" name="taglineweb2" class="form-control" value="<?php echo $dataedit->taglineweb2?>">
    </div>
	  <div class="form-group">
            <label>taglineweb3</label>
            <input type="text" name="taglineweb3" class="form-control" value="<?php echo $dataedit->taglineweb3?>">
    </div>
	  <div class="form-group">
            <label>taglineimage1</label>
            <input type="text" name="taglineimage1" class="form-control" value="<?php echo $dataedit->taglineimage1?>">
    </div>
	  <div class="form-group">
            <label>taglineimage2</label>
            <input type="text" name="taglineimage2" class="form-control" value="<?php echo $dataedit->taglineimage2?>">
    </div>
	  <div class="form-group">
            <label>taglineimage3</label>
            <input type="text" name="taglineimage3" class="form-control" value="<?php echo $dataedit->taglineimage3?>">
    </div>
	  <div class="form-group">
            <label>visi</label>
            <input type="text" name="visi" class="form-control" value="<?php echo $dataedit->visi?>">
    </div>
	  <div class="form-group">
            <label>misi</label>
            <input type="text" name="misi" class="form-control" value="<?php echo $dataedit->misi?>">
    </div>
	  <div class="form-group">
            <label>website</label>
            <input type="text" name="website" class="form-control" value="<?php echo $dataedit->website?>">
    </div>
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
