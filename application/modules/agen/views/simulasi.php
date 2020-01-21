<section class="card">
      <div class="card-header">
        <h4 class="card-title">Simulasi  Data Harga</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="POST" action="<?php echo base_url() ?>agen/hasil">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Banyak Jamaah</label>
                <div class="col-sm-10">
                  <input type="number"  min="1" max="50" oninput="maxLengthCheck(this)" name="banyak_jamaah" class="form-control" required placeholder="isi Banyak Jamaah maksimal 50" maxlength="2"  >
                </div>

              </div>

                <hr>
                <h4 class="card-title" align="center">Pilih Hotel Dan Malam</h4>
              <br>
              <!-- hotel madinah -->
						<div class="form-inline row">
                <label class="col-sm-2 col-form-label">Hotel madinah</label>
                <div class="col-sm-5 ">

                  <select class="form-control" name="hotelmadinah">
                    <<?php foreach ($hotelmadinah as $m): ?>
                      <option value="<?php echo $m->id_hotel ?>"><?php echo $m->namahotel ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                    <div class="col-sm-5">
                <label class="col-sm-2 col-form-label">Night</label>
                <input type="text" name="malammadinah" class="form-control" placeholder="Isi Malam Madinah" required oninput="maxLengthCheck(this)"  maxlength="2" >
                </div>
                <p>
                <hr>

                </div>
                <br>
                  <hr>
                <!-- <p>
              <label class="col-sm-2 col-form-label">Night</label>
              <div class="col-sm-5">

                      <input type="text" name="malammadinah" class="form-control" placeholder="Isi Malam Madinah" required>
                    </div>
                        <p>

              </div> -->
              <!-- <hr> -->
<!-- hotel mekah -->
              <p>
              <div class="form-inline row">
                  <label class="col-sm-2 col-form-label">Hotel mekah</label>
                  <div class="col-sm-5">

                    <select class="form-control" name="hotelmekah">
                      <?php foreach ($hotelmekah as $m): ?>
                        <option value="<?php echo $m->id_hotel ?>"><?php echo $m->namahotel ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                      <div class="col-sm-5">
                  <label class="col-sm-2 col-form-label">Night</label>
                  <input type="text" name="malammekah" class="form-control" placeholder="Isi Malam Mekah" required oninput="maxLengthCheck(this)"  maxlength="2" >
                  </div>
                  <p>
                  <hr>

                  </div>
                  <br>
                  <hr>
                  <!-- <p>
                  <label class="col-sm-2 col-form-label">Night</label>
                  <div class="col-sm-5">

                        <input type="text" name="malammekah" class="form-control" placeholder="Isi Malam Mekah" required>
                      </div>
                        <p>

                </div>
                <p>-..
                    <hr>
<!-- hotel jedah -->
                <div class="form-inline row">
                    <label class="col-sm-2 col-form-label">Hotel Jeddah</label>
                    <div class="col-sm-5">

                      <select class="form-control" name="hoteljeddah">
                        <?php foreach ($hoteljedah as $j): ?>
                          <option value="<?php echo $j->id_hotel ?>"><?php echo $j->namahotel ?></option>
                        <?php endforeach; ?>
                      </select>


                    </div>

                      <p>
                          <div class="col-sm-5">
                    <label class="col-sm-2 col-form-label"> Night</label>

                      <input type="text" name="malamjeddah" class="form-control" placeholder="Isi Malam Jedah "  oninput="maxLengthCheck(this)"  maxlength="2" > 
                  </div>
                    <p>
                <hr>

          </div>
          <br>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>

    <script>
      function maxLengthCheck(object)
      {
        if (object.value.length > object.maxLength)
          object.value = object.value.slice(0, object.maxLength)
      }
    </script>
