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
            <label>email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
    </div>
	  <div class="form-group">
            <label>alamat1</label>
            <input type="text" name="alamat1" class="form-control" value="<?php echo $dataedit->alamat1?>">
    </div>
	  <div class="form-group">
            <label>alamat2</label>
            <input type="text" name="alamat2" class="form-control" value="<?php echo $dataedit->alamat2?>">
    </div>
	  <div class="form-group">
            <label>alamat3</label>
            <input type="text" name="alamat3" class="form-control" value="<?php echo $dataedit->alamat3?>">
    </div>
	  <div class="form-group">
            <label>telepon1</label>
            <input type="text" name="telepon1" class="form-control" value="<?php echo $dataedit->telepon1?>">
    </div>
	  <div class="form-group">
            <label>telepon2</label>
            <input type="text" name="telepon2" class="form-control" value="<?php echo $dataedit->telepon2?>">
    </div>
	  <div class="form-group">
            <label>telepon3</label>
            <input type="text" name="telepon3" class="form-control" value="<?php echo $dataedit->telepon3?>">
    </div>
	  <div class="form-group">
            <label>website</label>
            <input type="text" name="website" class="form-control" value="<?php echo $dataedit->website?>">
    </div>
	  <div class="form-group">
            <label>google_maps</label>
            <input type="text" name="google_maps" class="form-control" value="<?php echo $dataedit->google_maps?>">
    </div>
	  <div class="form-group">
            <label>service_tagline</label>
            <input type="text" name="service_tagline" class="form-control" value="<?php echo $dataedit->service_tagline?>">
    </div>
	  <div class="form-group">
            <label>service_judul1</label>
            <input type="text" name="service_judul1" class="form-control" value="<?php echo $dataedit->service_judul1?>">
    </div>
	  <div class="form-group">
            <label>service_deskripsi1</label>
            <input type="text" name="service_deskripsi1" class="form-control" value="<?php echo $dataedit->service_deskripsi1?>">
    </div>
	  <div class="form-group">
            <label>service_judul2</label>
            <input type="text" name="service_judul2" class="form-control" value="<?php echo $dataedit->service_judul2?>">
    </div>
	  <div class="form-group">
            <label>service_deskripsi2</label>
            <input type="text" name="service_deskripsi2" class="form-control" value="<?php echo $dataedit->service_deskripsi2?>">
    </div>
	  <div class="form-group">
            <label>service_judul3</label>
            <input type="text" name="service_judul3" class="form-control" value="<?php echo $dataedit->service_judul3?>">
    </div>
	  <div class="form-group">
            <label>sevice_deskripsi3</label>
            <input type="text" name="sevice_deskripsi3" class="form-control" value="<?php echo $dataedit->sevice_deskripsi3?>">
    </div>
	  <div class="form-group">
            <label>service_judul4</label>
            <input type="text" name="service_judul4" class="form-control" value="<?php echo $dataedit->service_judul4?>">
    </div>
	  <div class="form-group">
            <label>service_deskripsi4</label>
            <input type="text" name="service_deskripsi4" class="form-control" value="<?php echo $dataedit->service_deskripsi4?>">
    </div>
	  <div class="form-group">
            <label>chosee_tagline</label>
            <input type="text" name="chosee_tagline" class="form-control" value="<?php echo $dataedit->chosee_tagline?>">
    </div>
	  <div class="form-group">
            <label>chosee_judul1</label>
            <input type="text" name="chosee_judul1" class="form-control" value="<?php echo $dataedit->chosee_judul1?>">
    </div>
	  <div class="form-group">
            <label>chosee_deskripsi1</label>
            <input type="text" name="chosee_deskripsi1" class="form-control" value="<?php echo $dataedit->chosee_deskripsi1?>">
    </div>
	  <div class="form-group">
            <label>chosee_judul2</label>
            <input type="text" name="chosee_judul2" class="form-control" value="<?php echo $dataedit->chosee_judul2?>">
    </div>
	  <div class="form-group">
            <label>chosee_deskripsi2</label>
            <input type="text" name="chosee_deskripsi2" class="form-control" value="<?php echo $dataedit->chosee_deskripsi2?>">
    </div>
	  <div class="form-group">
            <label>chosee_judul3</label>
            <input type="text" name="chosee_judul3" class="form-control" value="<?php echo $dataedit->chosee_judul3?>">
    </div>
	  <div class="form-group">
            <label>chosee_deskripsi3</label>
            <input type="text" name="chosee_deskripsi3" class="form-control" value="<?php echo $dataedit->chosee_deskripsi3?>">
    </div>
	  <div class="form-group">
            <label>chosee_judul4</label>
            <input type="text" name="chosee_judul4" class="form-control" value="<?php echo $dataedit->chosee_judul4?>">
    </div>
	  <div class="form-group">
            <label>chosee_deskripsi4</label>
            <input type="text" name="chosee_deskripsi4" class="form-control" value="<?php echo $dataedit->chosee_deskripsi4?>">
    </div>
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
