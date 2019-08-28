<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Datadiri</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
            <label>nama</label>
            <input type="text" name="nama" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>kelamin</label>
            <input type="text" name="kelamin" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>keahlian</label>
            <input type="text" name="keahlian" class="form-control" placeholder="">
    </div>
	    <input type="hidden" name="idnama" /> 
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
