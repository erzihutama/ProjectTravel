<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Profilweb_config</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
            <label>service_tagline</label>
            <input type="text" name="service_tagline" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>service_judul</label>
            <input type="text" name="service_judul" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>service_deskripsi</label>
            <input type="text" name="service_deskripsi" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>whychoose_tagline</label>
            <input type="text" name="whychoose_tagline" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>whychoose_judul</label>
            <input type="text" name="whychoose_judul" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>whychoose_deskripsi</label>
            <input type="text" name="whychoose_deskripsi" class="form-control" placeholder="">
    </div>
	    <input type="hidden" name="id_config" /> 
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
