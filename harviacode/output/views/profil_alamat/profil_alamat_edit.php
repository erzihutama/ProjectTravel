<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Profil_alamat</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
                    <label>id_alamat</label>
                    <input type="text" name="id_alamat" class="form-control" placeholder="" value="<?php echo $dataedit->id_alamat?>" readonly>
            </div>
	  <div class="form-group">
            <label>alamat_perusahaan</label>
            <input type="text" name="alamat_perusahaan" class="form-control" value="<?php echo $dataedit->alamat_perusahaan?>">
    </div>
	  <div class="form-group">
            <label>telepon_perusahaan</label>
            <input type="text" name="telepon_perusahaan" class="form-control" value="<?php echo $dataedit->telepon_perusahaan?>">
    </div>
	  <div class="form-group">
            <label>email_perusahaan</label>
            <input type="text" name="email_perusahaan" class="form-control" value="<?php echo $dataedit->email_perusahaan?>">
    </div>
	  <div class="form-group">
            <label>maps</label>
            <input type="text" name="maps" class="form-control" value="<?php echo $dataedit->maps?>">
    </div>
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
